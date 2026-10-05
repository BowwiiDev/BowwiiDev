<?php
require dirname(__DIR__) . '/src/bootstrap.php';
if (!empty($_SESSION['admin_id'])) redirect('admin.php');
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf();
    if (($_SESSION['blocked_until'] ?? 0) > time()) { $error = 'Too many attempts. Please wait five minutes.'; }
    else {
        if (($_SESSION['blocked_until'] ?? 0) > 0) unset($_SESSION['attempts'], $_SESSION['blocked_until']);
        $stmt = db()->prepare('SELECT id,password_hash FROM admins WHERE username = ?');
        $stmt->execute([field($_POST,'username')]); $admin = $stmt->fetch();
        $password = isset($_POST['password']) && is_string($_POST['password']) ? $_POST['password'] : '';
        if ($admin && password_verify($password, $admin['password_hash'])) {
            session_regenerate_id(true); $_SESSION['admin_id'] = (int)$admin['id'];
            unset($_SESSION['csrf'], $_SESSION['attempts'], $_SESSION['blocked_until']); redirect('admin.php');
        }
        $_SESSION['attempts'] = ($_SESSION['attempts'] ?? 0) + 1;
        if ($_SESSION['attempts'] >= 5) $_SESSION['blocked_until'] = time() + 300;
        $error = 'The username or password is incorrect.';
    }
}
page_header('Admin sign in');
?>
<section class="login-panel"><p class="eyebrow">PROPERTY MANAGEMENT</p><h1>Welcome back.</h1><p>Sign in to manage the demonstration listings.</p><?php if ($error): ?><div class="error" role="alert"><?= e($error) ?></div><?php endif; ?><form method="post"><input type="hidden" name="csrf" value="<?= e(csrf()) ?>"><label>Username<input name="username" autocomplete="username" required maxlength="50" value="<?= e(field($_POST,'username')) ?>"></label><label>Password<input name="password" type="password" autocomplete="current-password" required></label><button class="button" type="submit">Sign in ↗</button></form><p class="notice">Create your own administrator password using the CLI setup script. There are no shared demo credentials.</p></section>
<?php page_footer(); ?>
