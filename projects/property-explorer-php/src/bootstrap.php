<?php
declare(strict_types=1);

const PROJECT_TYPES = ['condo' => 'Condominium', 'townhome' => 'Townhome', 'house' => 'Detached house'];
const DISTRICTS = ['North Quarter', 'Riverside', 'Garden District'];

function config(): array
{
    $path = dirname(__DIR__) . '/config.local.php';
    return is_file($path) ? require $path : require dirname(__DIR__) . '/config.example.php';
}

function db(): PDO
{
    static $pdo;
    if (!$pdo) {
        $c = config();
        $pdo = new PDO(
            "mysql:host={$c['host']};port={$c['port']};dbname={$c['database']};charset=utf8mb4",
            $c['username'], $c['password'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
             PDO::ATTR_EMULATE_PREPARES => false]
        );
    }
    return $pdo;
}

function e(mixed $value): string { return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }
function field(array $input, string $key): string { return isset($input[$key]) && is_string($input[$key]) ? trim($input[$key]) : ''; }
function redirect(string $path): never { header('Location: ' . $path, true, 303); exit; }

function start_session(): void
{
    $sessionPath = dirname(__DIR__) . '/storage/sessions';
    if (!is_dir($sessionPath) && !mkdir($sessionPath, 0700, true) && !is_dir($sessionPath)) {
        throw new RuntimeException('Cannot create the local session directory.');
    }
    session_save_path($sessionPath);
    session_name('property_explorer_session');
    session_start(['use_strict_mode' => 1, 'cookie_httponly' => true, 'cookie_samesite' => 'Lax',
        'cookie_secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off']);
}

function csrf(): string
{
    return $_SESSION['csrf'] ??= bin2hex(random_bytes(32));
}

function verify_csrf(): void
{
    if (!hash_equals(csrf(), field($_POST, 'csrf'))) {
        http_response_code(403);
        exit('This form has expired. Return to the previous page and refresh before trying again.');
    }
}

function require_admin(): void
{
    if (empty($_SESSION['admin_id'])) redirect('login.php');
}

function validate_property(array $input): array
{
    $data = [];
    foreach (['name', 'district', 'type', 'description', 'price', 'bedrooms', 'area', 'map_x', 'map_y'] as $key) {
        $data[$key] = field($input, $key);
    }
    $data['published'] = field($input, 'published') === '1' ? 1 : 0;
    $errors = [];
    if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 100) $errors[] = 'Name must be 3-100 characters.';
    if (!isset(PROJECT_TYPES[$data['type']])) $errors[] = 'Select a valid property type.';
    if (!in_array($data['district'], DISTRICTS, true)) $errors[] = 'Select a valid district.';
    if (mb_strlen($data['description']) < 10 || mb_strlen($data['description']) > 1000) $errors[] = 'Description must be 10-1,000 characters.';
    foreach (['price' => [1, 999999999], 'bedrooms' => [1, 10], 'area' => [10, 10000], 'map_x' => [5, 95], 'map_y' => [5, 95]] as $key => [$min, $max]) {
        $number = filter_var($data[$key], FILTER_VALIDATE_INT);
        if ($number === false || $number < $min || $number > $max) $errors[] = ucfirst(str_replace('_', ' ', $key)) . " must be a whole number between $min and $max.";
        else $data[$key] = $number;
    }
    return [$data, $errors];
}

function search_properties(array $input): array
{
    $where = ['published = 1']; $params = [];
    $q = mb_substr(field($input, 'q'), 0, 100);
    $type = field($input, 'type'); $district = field($input, 'district');
    $max = filter_var(field($input, 'max_price'), FILTER_VALIDATE_INT);
    if ($q !== '') {
        $where[] = "(name LIKE ? ESCAPE '!' OR description LIKE ? ESCAPE '!')";
        $query = '%' . str_replace(['!', '%', '_'], ['!!', '!%', '!_'], $q) . '%';
        $params[] = $query; $params[] = $query;
    }
    if (isset(PROJECT_TYPES[$type])) { $where[] = 'type = ?'; $params[] = $type; }
    if (in_array($district, DISTRICTS, true)) { $where[] = 'district = ?'; $params[] = $district; }
    if ($max !== false && $max > 0) { $where[] = 'price <= ?'; $params[] = $max; }
    $order = ['price_asc' => 'price ASC, id ASC', 'price_desc' => 'price DESC, id ASC', 'newest' => 'id DESC'][field($input, 'sort')] ?? 'price ASC, id ASC';
    $stmt = db()->prepare('SELECT * FROM properties WHERE ' . implode(' AND ', $where) . ' ORDER BY ' . $order . ' LIMIT 100');
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function page_header(string $title, bool $admin = false): void
{
    header('Content-Type: text/html; charset=utf-8');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: same-origin');
    header("Content-Security-Policy: default-src 'self'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; script-src 'none'; base-uri 'none'; form-action 'self'; frame-ancestors 'none'");
    header('Cache-Control: no-store');
    ?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?= e($title) ?> | Habitat</title><link rel="stylesheet" href="assets/style.css"><link rel="icon" href="assets/home.svg" type="image/svg+xml"></head><body>
    <a class="skip" href="#main">Skip to content</a><header><a class="brand" href="index.php">habitat<span>.</span></a><nav aria-label="Main"><a href="index.php">Explore homes</a><?php if (!empty($_SESSION['admin_id'])): ?><a href="admin.php">Manage properties</a><form method="post" action="logout.php"><input type="hidden" name="csrf" value="<?= e(csrf()) ?>"><button class="link" type="submit">Sign out</button></form><?php else: ?><a href="login.php">Admin sign in <span aria-hidden="true">↗</span></a><?php endif; ?></nav></header><main id="main"><div class="demo-note">PORTFOLIO DEMO · All properties, districts, and prices are fictional.</div>
    <?php
}

function page_footer(): void
{
    ?></main><footer><strong>habitat.</strong><span>PHP + MySQL · Server-rendered · Built as a portfolio demo</span></footer></body></html><?php
}

set_exception_handler(function (Throwable $error): void {
    error_log($error->getMessage());
    http_response_code(500);
    if (!headers_sent()) header('Content-Type: text/html; charset=utf-8');
    echo '<h1>Something went wrong</h1><p>Please try again. For a new local installation, follow the database setup steps in README.md.</p>';
});

if (PHP_SAPI !== 'cli') start_session();
