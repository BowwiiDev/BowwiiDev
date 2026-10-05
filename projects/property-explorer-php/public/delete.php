<?php
require dirname(__DIR__) . '/src/bootstrap.php'; require_admin();
$id = filter_var(field($_GET,'id'), FILTER_VALIDATE_INT);
$stmt = db()->prepare('SELECT id,name FROM properties WHERE id = ?'); $stmt->execute([$id ?: 0]); $property = $stmt->fetch();
if (!$property) { http_response_code(404); page_header('Not found'); echo '<h1>Property not found.</h1>'; page_footer(); exit; }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    verify_csrf(); $stmt = db()->prepare('DELETE FROM properties WHERE id=?'); $stmt->execute([$id]);
    $_SESSION['flash'] = 'Property deleted.'; redirect('admin.php');
}
page_header('Delete property', true);
?>
<section class="login-panel"><p class="eyebrow">CONFIRM DELETION</p><h1>Delete this property?</h1><p><?= e($property['name']) ?> will be permanently removed from this demonstration database.</p><form method="post"><input type="hidden" name="csrf" value="<?= e(csrf()) ?>"><button class="button danger" type="submit">Delete property</button><a href="admin.php">Cancel and go back</a></form></section>
<?php page_footer(); ?>
