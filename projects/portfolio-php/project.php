<?php
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/case-studies.php';
$id = isset($_GET['id']) && is_string($_GET['id']) ? $_GET['id'] : '';
$project = null;
foreach ($projects as $item) {
    if ($item['id'] === $id) { $project = $item; break; }
}
$case = $project ? ($caseStudies[$id] ?? null) : null;
http_response_code($project ? 200 : 404);
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#faf8f3">
    <title><?= e($project ? $project['title'] : 'Project not found') ?> — Bowwii</title>
    <?php if ($project): ?>
    <meta name="description" content="<?= e($case ? $case['summary'] : $project['overview']) ?>">
    <meta property="og:title" content="<?= e($project['title']) ?> — Development case study">
    <meta property="og:description" content="<?= e($case ? $case['summary'] : $project['overview']) ?>">
    <meta property="og:type" content="article">
    <link rel="canonical" href="https://bowwiidev.com/project.php?id=<?= e($id) ?>">
    <?php endif; ?>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=project-roles-20261006">
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="case-site-header container"><a class="footer-brand" href="index.php">Bowwii<span>.</span></a><a class="text-link" href="index.php#work">← Selected work</a></header>
<?php if ($case): ?>
<main id="main" class="container case-page">
    <article>
        <header class="case-introduction">
            <p class="eyebrow section-label"><?= e($project['company']) ?> / <?= e($case['scope']) ?></p>
            <h1><?= e($project['title']) ?></h1>
            <p class="case-subtitle"><?= e($case['subtitle']) ?></p>
            <p class="case-lead"><?= e($case['summary']) ?></p>
            <dl class="case-facts"><div><dt>My role</dt><dd><?= e($case['role']) ?></dd></div><div><dt>Built for</dt><dd><?= e($case['audience']) ?></dd></div><div><dt>Stack</dt><dd><?= e(implode(' · ', $project['tags'])) ?></dd></div></dl>
            <?php if (!empty($project['role_note'])): ?><p class="project-role"><?= e($project['role_note']) ?></p><?php endif; ?>
            <?php if (!empty($project['links'])): ?><nav class="project-actions" aria-label="Public project websites"><?php foreach ($project['links'] as $link): ?><a class="text-link" href="<?= e($link['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($link['label']) ?> <span aria-hidden="true">↗</span></a><?php endforeach; ?></nav><?php endif; ?>
        </header>
        <figure class="case-workflow case-workflow-<?= e($case['theme']) ?>">
            <figcaption><span class="eyebrow">Workflow overview</span><h2><?= e($case['flow_title']) ?></h2></figcaption>
            <ol class="workflow-steps"><?php foreach ($case['flow'] as $step): ?><li><strong><?= e($step['title']) ?></strong><p><?= e($step['text']) ?></p></li><?php endforeach; ?></ol>
            <p class="workflow-note">Illustrated application flow, based on the implementation.</p>
        </figure>
        <div class="case-reading-layout">
            <nav class="case-contents" aria-label="Case study contents"><p class="eyebrow">In this case study</p><a href="#challenge">The brief</a><a href="#contribution">My contribution</a><a href="#decisions">Decisions &amp; trade-offs</a><a href="#delivery">Delivered capabilities</a><a href="#review">Validation focus</a><a href="#reflection">What I take from it</a><span><?= e($case['reading_time']) ?></span></nav>
            <div class="case-story">
                <section id="challenge" class="case-section"><p class="eyebrow section-label">The brief</p><h2><?= e($case['challenge']['title']) ?></h2><?php foreach ($case['challenge']['paragraphs'] as $paragraph): ?><p><?= e($paragraph) ?></p><?php endforeach; ?></section>
                <section id="contribution" class="case-section"><p class="eyebrow section-label">My contribution</p><h2>The work I <em>covered.</em></h2><ul><?php foreach ($case['responsibilities'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?></ul></section>
                <section id="decisions" class="case-section"><p class="eyebrow section-label">Decisions &amp; trade-offs</p><h2>How the pieces <em>fit together.</em></h2><?php foreach ($case['decisions'] as $index => $decision): ?><div class="case-decision"><span class="decision-number">0<?= $index + 1 ?></span><div><h3><?= e($decision['title']) ?></h3><p><?= e($decision['implementation']) ?></p><p><strong>Why this matters.</strong> <?= e($decision['reason']) ?></p><p class="decision-tradeoff"><strong>The trade-off.</strong> <?= e($decision['tradeoff']) ?></p></div></div><?php endforeach; ?></section>
                <section id="delivery" class="case-section"><p class="eyebrow section-label">Delivered capabilities</p><h2>What the work <em>enables.</em></h2><ul><?php foreach ($case['delivery'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?></ul><p class="case-measurement-note"><?= e($case['outcome_note']) ?></p></section>
                <section id="review" class="case-section"><p class="eyebrow section-label">Validation focus</p><h2>What needs to <em>hold up.</em></h2><p>The implementation has several paths worth checking when maintaining or deploying the application:</p><ul><?php foreach ($case['review_points'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?></ul></section>
                <section id="reflection" class="case-section"><p class="eyebrow section-label">What I take from it</p><h2>Beyond the <em>interface.</em></h2><p><?= e($case['reflection']) ?></p></section>
                <aside class="case-boundary"><p><?= e($case['boundary']) ?></p></aside>
            </div>
        </div>
        <footer class="case-next"><div><span class="eyebrow">Another side of my work</span><h2><?= e($case['next'] === 'career' ? 'SENA Career' : 'SENA Metro & Metro International') ?></h2><a class="text-link" href="project.php?id=<?= e($case['next']) ?>">Read the next case study <span aria-hidden="true">↗</span></a></div><a href="index.php#contact" class="btn btn-dark">Get in touch <span aria-hidden="true">↗</span></a></footer>
    </article>
</main>
<?php else: ?>
<main id="main" class="container project-page">
    <?php if ($project): ?>
    <p class="eyebrow"><?= e($project['company']) ?> / <?= e($project['label']) ?></p><h1><?= e($project['title']) ?></h1><p class="lead-copy"><?= e($project['overview']) ?></p><?php if (!empty($project['role_note'])): ?><p class="project-role"><?= e($project['role_note']) ?></p><?php endif; ?>
            <?php if (!empty($project['links'])): ?><nav class="project-actions" aria-label="Public project websites"><?php foreach ($project['links'] as $link): ?><a class="text-link" href="<?= e($link['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($link['label']) ?> <span aria-hidden="true">↗</span></a><?php endforeach; ?></nav><?php endif; ?><h2>My contribution</h2><ul><?php foreach ($project['contributions'] as $item): ?><li><?= e($item) ?></li><?php endforeach; ?></ul><div class="outcome-panel"><span class="eyebrow">What it helped with</span><p><?= e($project['outcome']) ?></p></div><div class="tag-list mt-4"><?php foreach ($project['tags'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?></div><a href="index.php#contact" class="btn btn-dark mt-5">Get in touch ↗</a>
    <?php else: ?><h1>Project not found.</h1><p>Please return to selected work to explore the portfolio.</p><?php endif; ?>
</main>
<?php endif; ?>
<footer class="site-footer"><div class="container"><a class="footer-brand" href="index.php">Bowwii<span>.</span></a><span>© <?= date('Y') ?> <?= e($profile['name']) ?></span><a href="index.php#work">Back to selected work ↑</a></div></footer>
</body>
</html>
