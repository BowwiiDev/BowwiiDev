<?php
require __DIR__ . '/includes/data.php';
$id = isset($_GET['id']) && is_string($_GET['id']) ? $_GET['id'] : '';
$project = null;
foreach ($projects as $item) {
    if ($item['id'] === $id) { $project = $item; break; }
}
http_response_code($project ? 200 : 404);
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
?>
<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title><?= e($project ? $project['title'] : 'Project not found') ?> — Watchiraporn</title><link rel="icon" href="assets/favicon.svg" type="image/svg+xml"><link rel="stylesheet" href="assets/vendor/bootstrap.min.css"><link rel="stylesheet" href="assets/css/style.css"></head>
<body><main class="container project-page"><a href="index.php#work" class="text-link">← Back to selected work</a>
<?php if ($project): ?>
<p class="eyebrow mt-5"><?= e($project['company']) ?> / <?= e($project['label']) ?></p><h1><?= e($project['title']) ?></h1><p class="lead-copy"><?= e($project['overview']) ?></p><h2>My contribution</h2><ul><?php foreach ($project['contributions'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?></ul><div class="outcome-panel"><span class="eyebrow">THE IMPACT</span><p><?= e($project['outcome']) ?></p></div><div class="tag-list mt-4"><?php foreach ($project['tags'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?></div><a href="index.php#contact" class="btn btn-dark mt-5">Let’s discuss a similar project ↗</a>
<?php else: ?><h1 class="mt-5">Project not found.</h1><p>Please return to selected work to explore the portfolio.</p><?php endif; ?>
</main></body></html>
