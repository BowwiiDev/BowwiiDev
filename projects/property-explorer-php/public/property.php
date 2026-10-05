<?php
require dirname(__DIR__) . '/src/bootstrap.php';
$id = filter_var(field($_GET,'id'), FILTER_VALIDATE_INT);
$stmt = db()->prepare('SELECT * FROM properties WHERE id = ? AND published = 1');
$stmt->execute([$id ?: 0]); $property = $stmt->fetch();
if (!$property) { http_response_code(404); page_header('Home not found'); echo '<section class="empty"><h1>Home not found.</h1><a class="button" href="index.php">Explore all homes</a></section>'; page_footer(); exit; }
page_header($property['name']);
?>
<a class="back" href="index.php">← Explore homes</a><section class="detail"><div class="property-art art-<?= e($property['type']) ?>" aria-hidden="true"><span class="art-label"><?= e($property['district']) ?></span><div class="building"><i></i><i></i><i></i></div></div><div><p class="eyebrow"><?= e(PROJECT_TYPES[$property['type']]) ?> / <?= e($property['district']) ?></p><h1><?= e($property['name']) ?></h1><p class="property-price">฿<?= number_format((int)$property['price']) ?></p><div class="property-specs"><span><?= (int)$property['bedrooms'] ?> bedrooms</span><span><?= (int)$property['area'] ?> m²</span></div><p class="description"><?= nl2br(e($property['description'])) ?></p><p class="notice">This is a fictional portfolio listing. No sales or contact requests are collected.</p><a class="button" href="index.php">Keep exploring ↗</a></div></section>
<?php page_footer(); ?>
