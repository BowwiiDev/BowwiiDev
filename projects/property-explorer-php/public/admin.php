<?php
require dirname(__DIR__) . '/src/bootstrap.php'; require_admin();
$properties = db()->query('SELECT * FROM properties ORDER BY id DESC')->fetchAll();
page_header('Manage properties', true);
?>
<section class="admin-title"><div><p class="eyebrow">BACK OFFICE</p><h1>Manage properties.</h1><p>Add, edit, publish, or remove fictional listings.</p></div><a class="button" href="edit.php">Add property +</a></section>
<?php if (isset($_SESSION['flash'])): ?><p class="success" role="status"><?= e($_SESSION['flash']) ?></p><?php unset($_SESSION['flash']); endif; ?>
<div class="table-wrapper"><table><caption class="sr-only">All demo properties</caption><thead><tr><th>Name</th><th>Type / Neighborhood</th><th>Price</th><th>Status</th><th>Actions</th></tr></thead><tbody><?php foreach ($properties as $p): ?><tr><td><strong><?= e($p['name']) ?></strong></td><td><?= e(PROJECT_TYPES[$p['type']]) ?><small><?= e($p['district']) ?></small></td><td>฿<?= number_format((int)$p['price']) ?></td><td><span class="status <?= $p['published'] ? '' : 'draft' ?>"><?= $p['published'] ? 'Published' : 'Draft' ?></span></td><td><a class="edit-link" href="edit.php?id=<?= (int)$p['id'] ?>">Edit<span class="sr-only"> <?= e($p['name']) ?></span></a><a class="delete-link" href="delete.php?id=<?= (int)$p['id'] ?>">Delete<span class="sr-only"> <?= e($p['name']) ?></span></a></td></tr><?php endforeach; ?></tbody></table></div>
<?php page_footer(); ?>
