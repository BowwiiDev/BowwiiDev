<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require dirname(__DIR__) . '/src/bootstrap.php';

$password = getenv('DEMO_ADMIN_PASSWORD') ?: '';
if (strlen($password) < 12) {
    fwrite(STDERR, "Set DEMO_ADMIN_PASSWORD to a password of at least 12 characters, then run setup again.\n"); exit(1);
}
$c = config();
if (!preg_match('/^[a-zA-Z0-9_]+$/', $c['database'])) throw new RuntimeException('Invalid database name.');
$pdo = new PDO("mysql:host={$c['host']};port={$c['port']};charset=utf8mb4", $c['username'], $c['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$pdo->exec('CREATE DATABASE IF NOT EXISTS `' . $c['database'] . '` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
$pdo = db();
$pdo->exec('CREATE TABLE IF NOT EXISTS properties (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100) NOT NULL, type VARCHAR(20) NOT NULL, district VARCHAR(50) NOT NULL,
 price INT UNSIGNED NOT NULL, bedrooms TINYINT UNSIGNED NOT NULL, area INT UNSIGNED NOT NULL,
 description TEXT NOT NULL, map_x TINYINT UNSIGNED NOT NULL, map_y TINYINT UNSIGNED NOT NULL,
 published TINYINT NOT NULL DEFAULT 1, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 INDEX public_search (published, type, district, price)
) ENGINE=InnoDB');
$pdo->exec('CREATE TABLE IF NOT EXISTS admins (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL UNIQUE,
 password_hash VARCHAR(255) NOT NULL
) ENGINE=InnoDB');
if ((int) $pdo->query('SELECT COUNT(*) FROM admins')->fetchColumn() > 0) {
    fwrite(STDERR, "An administrator already exists. Setup will not reset passwords or overwrite records.\n"); exit(1);
}
$pdo->beginTransaction();
try {
    $stmt = $pdo->prepare('INSERT INTO admins (username,password_hash) VALUES (?,?)');
    $stmt->execute(['admin', password_hash($password, PASSWORD_DEFAULT)]);
    if ((int) $pdo->query('SELECT COUNT(*) FROM properties')->fetchColumn() === 0) {
        $rows = [
            ['Willow Court', 'condo', 'North Quarter', 2400000, 1, 35, 'A light-filled apartment with a flexible living space and a shared courtyard. A fictional listing created for this demonstration.', 24, 27],
            ['River House', 'house', 'Riverside', 7200000, 3, 180, 'Room to grow, with a private garden and generous family spaces. A fictional listing created for this demonstration.', 76, 34],
            ['The Grove', 'townhome', 'Garden District', 3900000, 3, 125, 'A three-bedroom townhome with a calm palette, open-plan living, and a small garden. A fictional listing created for this demonstration.', 37, 72],
            ['Canopy Residences', 'condo', 'Garden District', 3200000, 2, 58, 'An easy-to-maintain two-bedroom apartment overlooking landscaped common areas. A fictional listing created for this demonstration.', 58, 60],
            ['Northfield Home', 'house', 'North Quarter', 5900000, 3, 160, 'A detached home with a dedicated work corner and outdoor space. A fictional listing created for this demonstration.', 46, 20],
            ['Brook Lane', 'townhome', 'Riverside', 4500000, 3, 140, 'A practical townhome with connected living and dining areas. A fictional listing created for this demonstration.', 81, 75],
        ];
        $stmt = $pdo->prepare('INSERT INTO properties (name,type,district,price,bedrooms,area,description,map_x,map_y) VALUES (?,?,?,?,?,?,?,?,?)');
        foreach ($rows as $row) $stmt->execute($row);
    }
    $pdo->commit();
    echo "Demo setup complete. Sign in as admin using the password supplied in DEMO_ADMIN_PASSWORD.\n";
} catch (Throwable $error) { $pdo->rollBack(); throw $error; }
