<?php
require __DIR__ . '/includes/data.php';
header('Content-Type: text/html; charset=utf-8');
header('X-Content-Type-Options: nosniff');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#faf9f6">
    <meta name="description" content="Watchiraporn Suphachrunsap — Senior Web Developer in Bangkok. 15+ years building PHP applications, WordPress websites, and responsive interfaces.">
    <meta property="og:title" content="Watchiraporn — PHP & WordPress Developer">
    <meta property="og:description" content="Explore PHP web applications, custom WordPress development, and responsive interfaces by Watchiraporn Suphachrunsap.">
    <meta property="og:type" content="website">
    <title>Watchiraporn — Senior Web Developer</title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendor/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Skip to content</a>
<header class="site-header">
    <nav class="navbar navbar-expand-lg container" aria-label="Main navigation">
        <a class="navbar-brand" href="#home" aria-label="Watchiraporn, home"><span class="brand-mark">w<span>.</span></span><span class="brand-name">WATCHIRAPORN<span>PHP · WORDPRESS · WEB APPLICATIONS</span></span></a>
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
            <div class="hero-topline"><span class="eyebrow"><span class="small-dot"></span> WEB DEVELOPER / BANGKOK</span><span class="location"><span aria-hidden="true">◎</span> <?= e($profile['location']) ?></span></div>
            <div class="row align-items-center hero-grid">
                <div class="col-lg-7 hero-copy">
                    <h1>Thoughtful code.<br>Websites that<br><span class="accent-word">work<span class="impact-dot">.</span></span></h1>
                    <p class="hero-intro">Hi, I’m <strong><?= e($profile['first_name']) ?>.</strong><br>A Senior Web Developer building PHP applications,<br class="d-none d-xl-block"> WordPress websites, and responsive interfaces.</p>
                    <div class="hero-actions"><a href="#work" class="btn btn-dark">Explore my work <span aria-hidden="true">↗</span></a><a href="<?= e($profile['resume']) ?>" class="text-link" download>Download resume <span aria-hidden="true">↓</span></a></div>
                    <a class="github-link" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub / BowwiiDev <span aria-hidden="true">↗</span></a>
                </div>
                <div class="col-lg-5 hero-art-column">
                    <div class="system-art" role="img" aria-label="PHP applications, WordPress content, and responsive interfaces">
                        <div class="art-top"><span>THE WEB DEVELOPMENT TOOLKIT</span><span class="art-index">[ 01 — 03 ]</span></div>
                        <div class="orbit orbit-one"></div><div class="orbit orbit-two"></div>
                        <svg class="connection-lines" viewBox="0 0 460 460" aria-hidden="true"><path d="M105 125 H225 V228 H345 M225 228 V349 H126"/><circle cx="225" cy="228" r="5"/></svg>
                        <div class="system-node node-web"><span class="node-icon">&lt;/&gt;</span><span><small>01 / BUILD</small><strong>PHP applications</strong></span><span class="node-corner">↗</span></div>
                        <div class="system-hub"><span>W<span class="hub-dot">.</span></span><small>CONNECTED BY DESIGN</small></div>
                        <div class="system-node node-api"><span class="node-icon">{ }</span><span><small>02 / CONNECT</small><strong>WordPress & CMS</strong></span><span class="node-corner">↗</span></div>
                        <div class="system-node node-auto"><span class="node-icon">⌁</span><span><small>03 / SIMPLIFY</small><strong>Responsive UI</strong></span><span class="node-corner">↗</span></div>
                        <div class="art-bottom"><span class="small-dot"></span> Ideas into systems. Systems into impact.<span class="art-plus">+</span></div>
                    </div>
                    <div class="art-caption"><span>BUILT WITH PURPOSE</span><span>Designed to make a difference.</span></div>
                </div>
            </div>
            <div class="hero-bottom"><span>PHP × WORDPRESS × WEB APPLICATIONS</span><a href="#about">A little more about me <span aria-hidden="true">↓</span></a></div>
        </div>
    </section>

    <section id="about" class="about-section section-space section-anchor">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4"><p class="eyebrow section-label"><span>01</span> / ABOUT ME</p><h2>A developer’s mind.<br>A business-first<br>perspective.</h2></div>
                <div class="col-lg-8 about-content"><p class="lead-copy">I build websites people can use,<br class="d-none d-xl-block"> and systems teams can maintain.</p><p>With 15+ years of web development experience, I build and maintain corporate websites, custom WordPress and Drupal platforms, and PHP/MySQL applications. My work covers responsive interfaces, forms, content management, and back-office tools.</p><p>From requirements to deployment, I focus on maintainable code, browser compatibility, and reliable website operations. API integration and workflow automation support the websites I build.</p>
                    <div class="row stats-row"><div class="col-4"><strong>15<span>+</span></strong><span>Years of experience</span></div><div class="col-4"><strong>30<span>+</span></strong><span>Corporate projects<br><small>at IT Ready</small></span></div><div class="col-4"><strong>22<span>+</span></strong><span>Residential sites<br><small>at SENA</small></span></div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="work-section section-space section-anchor">
        <div class="container">
            <div class="section-heading"><div><p class="eyebrow section-label"><span>02</span> / SELECTED WORK</p><h2>Built to make things better<span class="accent">.</span></h2></div><p>PHP applications, WordPress development,<br>and a modern web prototype.</p></div>
            <div class="work-filters" role="group" aria-label="Filter projects"><button type="button" class="filter-button active" data-filter="all" aria-pressed="true">All work <span>04</span></button><button type="button" class="filter-button" data-filter="php" aria-pressed="false">PHP applications <span>02</span></button><button type="button" class="filter-button" data-filter="cms" aria-pressed="false">WordPress <span>01</span></button><button type="button" class="filter-button" data-filter="prototype" aria-pressed="false">Prototype <span>01</span></button></div>
            <p id="filter-status" class="visually-hidden" aria-live="polite">Showing all 4 projects.</p>
            <div class="row g-4 project-grid">
            <?php foreach ($projects as $index => $project): ?>
                <div class="col-md-6 project-column" data-category="<?= e($project['category']) ?>">
                    <article class="project-card">
                        <div class="project-visual visual-<?= e($project['id']) ?>" aria-hidden="true">
                            <span class="visual-number">PROJECT / 0<?= $index + 1 ?></span>
                            <div class="case-preview"><div class="case-toolbar"><span>● ● ●</span><span><?= e($project['label']) ?></span></div><div class="case-layout"><span class="case-symbol"><?= ['metro' => '⌖', 'campaign' => '&lt;/&gt;', 'career' => 'w.', 'property-chat' => '{ }'][$project['id']] ?></span><strong><?= e($project['visual_title']) ?></strong><div class="case-lines"><i></i><i></i></div></div><div class="case-note"><?= e($project['visual_note']) ?></div></div>
                        </div>
                        <div class="project-body"><div class="project-meta"><span><?= e($project['label']) ?></span><span><?= e($project['company']) ?></span></div><h3><a href="project.php?id=<?= e($project['id']) ?>" class="project-link" data-project="<?= e($project['id']) ?>"><?= e($project['title']) ?><span class="project-arrow" aria-hidden="true">↗</span></a></h3><p><?= e($project['description']) ?></p><div class="tag-list"><?php foreach ($project['tags'] as $tag): ?><span><?= e($tag) ?></span><?php endforeach; ?></div></div>
                    </article>
                </div>
            <?php endforeach; ?>
            </div>

            <article class="demo-feature" id="demo">
                <div class="demo-image"><img src="assets/images/habitat-preview.png" alt="Habitat portfolio demo showing property filters, a map, and fictional home listings" loading="lazy" width="1440" height="1000"></div>
                <div class="demo-copy"><p class="eyebrow">PERSONAL PORTFOLIO DEMO</p><h3>Habitat / Property Explorer</h3><p>A PHP/MySQL demo with property search, filters, and an authenticated admin for creating, updating, and managing listings.</p><div class="tag-list"><span>PHP</span><span>MySQL</span><span>Admin CRUD</span><span>Responsive UI</span></div><p class="demo-disclosure">Built with Codex assistance and fictional data as a new portfolio exercise.</p><a class="text-link" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">Visit my GitHub profile <span aria-hidden="true">↗</span></a></div>
            </article>
            <p class="work-note">Company project visuals are conceptual illustrations. The React project is a functional prototype. Company source code and internal data are not shared here.</p>
        </div>
    </section>

    <section id="experience" class="experience-section section-space section-anchor">
        <div class="container"><div class="row g-5"><div class="col-lg-4"><p class="eyebrow section-label"><span>03</span> / THE JOURNEY</p><h2>Experience that<br>connects the dots.</h2><p class="section-intro">From responsive websites to PHP applications<br class="d-none d-xl-block"> and custom content platforms.</p><a class="text-link" href="<?= e($profile['resume']) ?>" download>My full resume <span aria-hidden="true">↓</span></a></div><div class="col-lg-8"><div class="experience-list">
        <?php foreach ($experience as $index => $job): ?>
            <details class="experience-item" <?= $index === 0 ? 'open' : '' ?>><summary><span class="timeline-dot"></span><span class="job-heading"><span class="job-period"><?= e($job['period']) ?><?= $index === 0 ? '<span class="current-tag">CURRENT</span>' : '' ?></span><strong><?= e($job['company']) ?></strong><span class="job-role"><?= e($job['role']) ?></span></span><span class="details-icon" aria-hidden="true">+</span></summary><div class="job-details"><p><?= e($job['summary']) ?></p><ul><?php foreach ($job['details'] as $detail): ?><li><?= e($detail) ?></li><?php endforeach; ?></ul></div></details>
        <?php endforeach; ?>
        </div></div></div></div>
    </section>

    <section id="skills" class="skills-section section-space section-anchor"><div class="container"><div class="section-heading"><div><p class="eyebrow section-label"><span>04</span> / THE TOOLKIT</p><h2>The right tools. A thoughtful approach<span class="accent">.</span></h2></div></div><div class="row g-0 skill-grid">
        <?php foreach ($skills as $skill): ?><div class="col-md-6 col-lg-4"><article class="skill-card"><span class="skill-number"><?= e($skill['number']) ?> /</span><h3><?= e($skill['title']) ?></h3><p><?= e($skill['text']) ?></p><div class="tag-list"><?php foreach ($skill['items'] as $item): ?><span><?= e($item) ?></span><?php endforeach; ?></div></article></div><?php endforeach; ?>
        </div><div class="learning-row row g-4"><div class="col-lg-6"><span class="eyebrow">EDUCATION</span><h3>B.Sc. in Information Technology</h3><p>Computer Science · Rattanabundit University</p><span class="learning-meta">2005 — 2008 <span>GPA 3.14</span></span></div><div class="col-lg-6"><span class="eyebrow">ALWAYS LEARNING</span><h3>Curiosity is part of the process.</h3><p>Developing with React, TypeScript, and Node.js through practical projects and prototypes.</p><span class="learning-meta">Codex assists my prototyping, iteration, and debugging.</span></div></div></div></section>

    <section id="contact" class="contact-section section-anchor"><div class="container"><div class="contact-top"><p class="eyebrow section-label"><span>05</span> / LET’S CONNECT</p><span><?= e($profile['location']) ?> <span aria-hidden="true">↗</span></span></div><div class="row align-items-center g-4"><div class="col-lg-8"><h2>Have something<br>great in mind<span class="accent">?</span></h2><p>Let’s talk about web development roles and your next PHP or WordPress project.</p></div><div class="col-lg-4 contact-action"><a class="contact-circle" href="mailto:<?= e($profile['email']) ?>" aria-label="Send Watchiraporn an email"><span aria-hidden="true">↗</span><span>LET’S TALK</span></a></div></div><div class="contact-links"><div class="email-group"><a class="email-link" href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a><button class="copy-email" type="button" data-email="<?= e($profile['email']) ?>" aria-label="Copy email address" title="Copy email address"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><rect x="8" y="8" width="12" height="13" rx="2"/><path d="M16 8V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3"/></svg></button><span id="copy-status" role="status"></span></div><a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener noreferrer">GitHub / BowwiiDev ↗</a><a href="tel:<?= e($profile['phone_link']) ?>"><?= e($profile['phone']) ?> <span aria-hidden="true">↗</span></a></div></div></section>
</main>
<footer class="site-footer"><div class="container"><a href="#home" class="footer-brand">w<span>.</span></a><span>© <?= date('Y') ?> <?= e($profile['name']) ?></span><a href="#home">Back to top <span aria-hidden="true">↑</span></a></div></footer>

<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><span class="eyebrow">PROJECT DETAILS</span><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close project details"></button></div><div class="modal-body"><p id="modal-category" class="project-meta"></p><h2 id="projectModalTitle"></h2><p id="modal-overview" class="modal-overview"></p><h3>My contribution</h3><ul id="modal-contributions"></ul><div class="outcome-panel"><span class="eyebrow">THE IMPACT</span><p id="modal-outcome"></p></div><div id="modal-tags" class="tag-list"></div></div><div class="modal-footer"><a href="#contact" class="text-link" id="modal-contact">Let’s discuss a similar project <span aria-hidden="true">↗</span></a></div></div></div></div>
<script type="application/json" id="project-data"><?= json_encode($projects, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?></script>
</body>
</html>
