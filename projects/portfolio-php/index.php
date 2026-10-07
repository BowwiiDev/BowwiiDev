<?php
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/case-studies.php';
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#faf9f6">
    <meta name="description" content="Watchiraporn Suphachrunsap — Senior Web Developer in Bangkok. PHP, WordPress and marketing technology: campaign landing pages, technical SEO/AEO and ChatGPT Ads readiness.">
    <meta property="og:title" content="Watchiraporn — Web Development & Marketing Technology">
    <meta property="og:description" content="Explore PHP applications, custom WordPress themes, and campaign website optimization for SEO/AEO and ChatGPT Ads readiness.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bowwiidev.com/">
    <link rel="canonical" href="https://bowwiidev.com/">
    <title>Watchiraporn — Senior Web Developer</title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=martech-20261007">
    <script src="assets/vendor/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/main.js?v=martech-20261007" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <nav class="navbar navbar-expand-lg container" aria-label="Main navigation">
        <a class="navbar-brand" href="#home" aria-label="Watchiraporn, home"><span class="brand-mark">b<span>.</span></span><span class="brand-name">Bowwii<span>Watchiraporn Suphachrunsap</span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#work">Selected work</a></li>
                <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link nav-contact" href="#contact">Let’s talk <span aria-hidden="true">↗</span></a></li>
            </ul>
        </div>
    </nav>
</header>
<main id="main">
    <section id="home" class="hero section-anchor">
        <div class="container">
            <div class="row align-items-center hero-grid">
                <div class="col-lg-7 hero-copy">
                    <p class="eyebrow hero-kicker">Senior web developer <span class="kicker-dot" aria-hidden="true">·</span> Bangkok, Thailand</p>
                    <h1>Hi, I’m Bowwii.<br>I build for <em>the web.</em></h1>
                    <p class="hero-specialty">Web development &amp; marketing technology.</p>
                    <p class="hero-intro">I’m <?= e($profile['first_name']) ?>, a developer with 15+ years of experience building PHP applications and custom WordPress themes. In Corporate Marketing, I also improve campaign websites for technical SEO/AEO and ChatGPT Ads readiness.</p>
                    <div class="hero-actions"><a href="#work" class="btn btn-dark">See selected work <span aria-hidden="true">↗</span></a><a href="<?= e($profile['resume']) ?>" class="text-link" download>Download resume <span aria-hidden="true">↓</span></a></div>
                    <a class="github-link" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">Find me on GitHub <span aria-hidden="true">↗</span></a>
                </div>
                <div class="col-lg-5 hero-art-column">
                    <figure class="hero-work">
                        <a class="hero-case-cover" href="project.php?id=metro"><span class="eyebrow">Featured case study / PHP &amp; MySQL</span><h2>Search.<br>Explore.<br><em>Enquire.</em></h2><span class="hero-case-description">Property discovery for Thai and international audiences,<br>developed with Codex assistance.</span><span class="hero-case-footer">SENA Metro &amp; Metro International <span aria-hidden="true">↗</span></span></a>
                        <figcaption><span>Development workflow overview</span><a href="project.php?id=metro">Read the case study <span aria-hidden="true">↗</span></a></figcaption>
                    </figure>
                </div>
            </div>
            <div class="hero-bottom"><span>Corporate websites. Content platforms. Useful little tools.</span><a href="#about">A little about me <span aria-hidden="true">↓</span></a></div>
        </div>
    </section>

    <section id="work" class="work-section section-space section-anchor">
        <div class="container">
            <div class="section-heading"><div><p class="eyebrow section-label">Selected work</p><h2>A few things I’ve <em>built.</em></h2></div><p>Custom applications, a theme I wrote,<br>and WordPress websites I customized.</p></div>
            <div class="featured-cases">
            <?php foreach (['metro', 'career', 'campaign'] as $caseId): $featuredCase = $caseStudies[$caseId]; $featuredProject = null; foreach ($projects as $item) { if ($item['id'] === $caseId) { $featuredProject = $item; break; } } ?>
                <article class="featured-case featured-case-<?= e($caseId) ?>"><p class="eyebrow">Company project / <?= e($featuredProject['label']) ?></p><h3><a href="project.php?id=<?= e($caseId) ?>"><?= e($featuredProject['title']) ?></a></h3><p class="featured-case-subtitle"><?= e($featuredCase['subtitle']) ?></p><ol class="featured-flow" aria-label="Project workflow"><?php foreach ($featuredCase['flow'] as $step): ?><li><?= e($step['title']) ?></li><?php endforeach; ?></ol><p><?= e($featuredCase['summary']) ?></p><p class="project-role"><?= e($featuredProject['role_note']) ?></p><div class="project-actions"><a class="text-link" href="project.php?id=<?= e($caseId) ?>">Read the case study <span aria-hidden="true">↗</span></a><?php foreach ($featuredProject['links'] as $link): ?><a class="text-link" href="<?= e($link['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($link['label']) ?> <span aria-hidden="true">↗</span></a><?php endforeach; ?></div></article>
            <?php endforeach; ?>
            </div>
            <div class="other-work-heading"><h3>Project index</h3><p>My role in each project, with links to the public websites.</p></div>
            <div class="work-filters" role="group" aria-label="Filter projects">
                <button type="button" class="filter-button active" data-filter="all" aria-pressed="true">All work <span><?= str_pad((string) count($projects), 2, '0', STR_PAD_LEFT) ?></span></button>
                <?php foreach (['php' => 'PHP applications', 'cms' => 'Custom WordPress', 'martech' => 'Marketing technology', 'customization' => 'Theme customization', 'prototype' => 'Prototype'] as $category => $label): $count = count(array_filter($projects, fn($item) => $item['category'] === $category)); ?>
                <button type="button" class="filter-button" data-filter="<?= e($category) ?>" aria-pressed="false"><?= e($label) ?> <span><?= str_pad((string) $count, 2, '0', STR_PAD_LEFT) ?></span></button>
                <?php endforeach; ?>
            </div>
            <p id="filter-status" class="visually-hidden" aria-live="polite">Showing all <?= count($projects) ?> projects.</p>
            <div class="project-grid">
            <?php foreach ($projects as $index => $project): ?>
                <div class="project-column" data-category="<?= e($project['category']) ?>">
                    <article class="project-card"><span class="project-index" aria-hidden="true">0<?= $index + 1 ?></span><div class="project-body"><div class="project-meta"><span><?= e($project['label']) ?></span><span><?= e($project['company']) ?></span></div><h3><a href="project.php?id=<?= e($project['id']) ?>" class="project-link" data-project="<?= e($project['id']) ?>"><?= e($project['title']) ?><span class="project-arrow" aria-hidden="true">↗</span></a></h3><p><?= e($project['description']) ?></p></div><div class="project-summary"><span class="contribution-label">My part</span><p><?= e($project['contributions'][0]) ?></p><div class="tag-list"><?php foreach ($project['tags'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?></div><?php if (!empty($project['links'])): ?><div class="project-actions"><?php foreach ($project['links'] as $link): ?><a class="text-link" href="<?= e($link['url']) ?>" target="_blank" rel="noopener noreferrer"><?= e($link['label']) ?> <span aria-hidden="true">↗</span></a><?php endforeach; ?></div><?php endif; ?></div></article>
                </div>
            <?php endforeach; ?>
            </div>
            <p class="work-note">Metro was developed with Codex assistance. SENA Career uses a theme I wrote and job filters I developed. Campaign work covers landing pages, metadata, structured data, and crawler rules for SEO/AEO and ChatGPT Ads readiness. RentNex, SENA Green Auto, and SENA Logistics are existing-theme customizations. Property Search Chat is a functional prototype.</p>
            <div class="personal-work-heading"><p class="eyebrow section-label">A personal project</p><h3>A place to experiment.</h3></div>
            <article class="demo-feature" id="demo">
                <a class="demo-image" href="<?= e($profile['habitat']) ?>" aria-label="Explore the Habitat personal portfolio demo"><img src="assets/images/habitat-preview.png" alt="Habitat demo showing property search, map filters, and fictional home listings" loading="lazy" width="1440" height="1000"></a>
                <div class="demo-copy"><p class="eyebrow">On my workbench / personal project</p><h3>Habitat<br><em>Property Explorer</em></h3><p>A place to explore homes — and a practical exercise in building the tools behind the page.</p><p>I built property search and filters alongside a PHP/MySQL admin for creating, editing, and managing listings.</p><div class="tag-list"><span>PHP</span><span>MySQL</span><span>Admin CRUD</span></div><div class="demo-actions"><a class="btn btn-dark" href="<?= e($profile['habitat']) ?>">Explore the demo <span aria-hidden="true">↗</span></a><a class="text-link" href="https://github.com/BowwiiDev/BowwiiDev/tree/main/projects/property-explorer-php" target="_blank" rel="noopener noreferrer">View source code <span aria-hidden="true">↗</span></a></div><p class="demo-disclosure">A portfolio exercise built with Codex assistance and fictional data.</p></div>
            </article>
        </div>
    </section>


    <section id="about" class="about-section section-space section-anchor">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4"><p class="eyebrow section-label">A little about me</p><h2>The person<br>behind <em>the code.</em></h2></div>
                <div class="col-lg-8 about-content"><p class="lead-copy">I like making the everyday work<br class="d-none d-xl-block"> behind a website a little easier.</p><p>My work has taken me from turning designs into HTML and CSS to building PHP/MySQL applications and custom WordPress themes. I developed the Metro applications with Codex assistance, wrote the SENA Career theme and job filters, and customized existing themes for RentNex, SENA Green Auto, and SENA Logistics.</p><p>I currently work within Corporate Marketing, Digital Channel &amp; Marketing Technology. Alongside application development, I improve campaign landing pages and company-group websites for technical SEO/AEO. My latest campaign work covers metadata, structured data, and crawler rules to prepare landing pages for ChatGPT Ads.</p><p>The parts I care about are often behind the scenes: forms that send the right information, content that editors can update, and code the next developer can understand. I work through the requirements, build the interface and back office, and help get it running.</p>
                    <div class="row stats-row"><div class="col-4"><strong>15<span>+</span></strong><span>Years of experience</span></div><div class="col-4"><strong>30<span>+</span></strong><span>Corporate projects<br><small>at IT Ready</small></span></div><div class="col-4"><strong>22<span>+</span></strong><span>Residential sites<br><small>at SENA</small></span></div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="experience-section section-space section-anchor">
        <div class="container"><div class="row g-5"><div class="col-lg-4"><p class="eyebrow section-label">Experience</p><h2>Where I’ve<br><em>spent my time.</em></h2><p class="section-intro">From responsive websites to PHP applications<br class="d-none d-xl-block"> and custom content platforms.</p><a class="text-link" href="<?= e($profile['resume']) ?>" download>My full resume <span aria-hidden="true">↓</span></a></div><div class="col-lg-8"><div class="experience-list">
        <?php foreach ($experience as $index => $job): ?>
            <details class="experience-item" <?= $index === 0 ? 'open' : '' ?>><summary><span class="timeline-dot"></span><span class="job-heading"><span class="job-period"><?= e($job['period']) ?><?= $index === 0 ? '<span class="current-tag">CURRENT</span>' : '' ?></span><strong><?= e($job['company']) ?></strong><span class="job-role"><?= e($job['role']) ?></span></span><span class="details-icon" aria-hidden="true">+</span></summary><div class="job-details"><p><?= e($job['summary']) ?></p><ul><?php foreach ($job['details'] as $detail): ?><li><?= e($detail) ?></li><?php endforeach; ?></ul></div></details>
        <?php endforeach; ?>
        </div></div></div></div>
    </section>

    <section id="skills" class="skills-section section-space section-anchor"><div class="container"><div class="section-heading"><div><p class="eyebrow section-label">Tools &amp; practice</p><h2>What I work <em>with.</em></h2></div></div><div class="row g-0 skill-grid">
        <?php foreach ($skills as $skill): ?><div class="col-md-6 col-lg-4"><article class="skill-card"><h3><?= e($skill['title']) ?></h3><p><?= e($skill['text']) ?></p><div class="tag-list"><?php foreach ($skill['items'] as $item): ?><span><?= e($item) ?></span><?php endforeach; ?></div></article></div><?php endforeach; ?>
        </div><div class="learning-row row g-4"><div class="col-lg-6"><span class="eyebrow">EDUCATION</span><h3>B.Sc. in Information Technology</h3><p>Computer Science · Rattanabundit University</p><span class="learning-meta">2005 — 2008 <span>GPA 3.14</span></span></div><div class="col-lg-6"><span class="eyebrow">Currently exploring</span><h3>Learning by building.</h3><p>Developing with React, TypeScript, and Node.js through practical projects and prototypes.</p><span class="learning-meta">Codex assists my prototyping, iteration, and debugging.</span></div></div></div></section>

    <section id="contact" class="contact-section section-anchor"><div class="container"><div class="contact-top"><p class="eyebrow section-label">Get in touch</p><span><?= e($profile['location']) ?> <span aria-hidden="true">↗</span></span></div><div class="row align-items-center g-4"><div class="col-lg-8"><h2>Let’s build something<br><em>useful together.</em></h2><p>Let’s talk about web development roles and your next PHP or WordPress project.</p></div><div class="col-lg-4 contact-action"><a class="contact-button" href="mailto:<?= e($profile['email']) ?>" aria-label="Send Watchiraporn an email"><span>Send me a note</span><span aria-hidden="true">↗</span></a></div></div><div class="contact-links"><div class="email-group"><a class="email-link" href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a><button class="copy-email" type="button" data-email="<?= e($profile['email']) ?>" aria-label="Copy email address" title="Copy email address"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="8" y="8" width="12" height="13" rx="2"/><path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3"/></svg></button><span id="copy-status" role="status"></span></div><a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub / BowwiiDev ↗</a></div></div></section>
</main>
<footer class="site-footer"><div class="container"><a href="#home" class="footer-brand">Bowwii<span>.</span></a><span>© <?= date('Y') ?> <?= e($profile['name']) ?></span><a href="#home">Back to top <span aria-hidden="true">↑</span></a></div></footer>

<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><span class="eyebrow">PROJECT DETAILS</span><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close project details"></button></div><div class="modal-body"><p id="modal-category" class="project-meta"></p><h2 id="projectModalTitle"></h2><p id="modal-overview" class="modal-overview"></p><p id="modal-role" class="project-role" hidden></p><div id="modal-live-links" class="project-actions" hidden></div><h3>My contribution</h3><ul id="modal-contributions"></ul><div class="outcome-panel"><span class="eyebrow">What it helped with</span><p id="modal-outcome"></p></div><div id="modal-tags" class="tag-list"></div></div><div class="modal-footer"><a class="btn btn-dark" id="modal-case-study" href="project.php" hidden>Read the full case study <span aria-hidden="true">↗</span></a><a href="#contact" class="text-link" id="modal-contact">Let’s discuss a similar project <span aria-hidden="true">↗</span></a></div></div></div></div>
<script type="application/json" id="project-data"><?= json_encode($projects, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?></script>
</body>
</html>
