<?php
declare(strict_types=1);

// Content based on the resume and reviewed local project implementations.
// Edit this file to update the content. Display text is escaped in the template.
$profile = [
'name' => 'Watchiraporn Suphachrunsap',
'first_name' => 'Watchiraporn',
'role' => 'Senior Web Developer',
'email' => 'wachiraporn.supha@gmail.com',
'phone' => '087-212-9399',
'phone_link' => '+66872129399',
'location' => 'Bangkok, Thailand',
'github' => 'https://github.com/BowwiiDev',
'resume' => 'assets/documents/Watchiraporn-Suphachrunsap-Web-Developer.pdf'
];

$projects = [[
'id' => 'metro',
'category' => 'php',
'label' => 'PHP web application',
'title' => 'SENA Metro Project Map',
'company' => 'SENA Development',
'description' => 'Property discovery with map filters, project details, and tools for managing content and leads.',
'tags' => ['PHP',
'MySQL',
'JavaScript'],
'visual_title' => 'Find a place. Explore the map.',
'visual_note' => 'MAP SEARCH / PROJECT DETAILS / ADMIN',
'overview' => 'A property discovery application with map markers, filters, project details, and lead registration, supported by a PHP/MySQL back office.',
'contributions' => ['Developed map-based discovery, filters, project detail pages, and registration workflows.',
'Built administration for projects, images, property types, train lines, map positions, lead search, and CSV export.',
'Used prepared statements, output escaping, CSRF checks, and upload validation.'],
'outcome' => 'Connected property browsing with practical content and lead management in one application.'
],
[
'id' => 'campaign',
'category' => 'php',
'label' => 'Registration & integrations',
'title' => 'SENA Break Every Limit',
'company' => 'SENA Development',
'description' => 'A campaign website with registration, email delivery tracking, and CRM integration workflows.',
'tags' => ['PHP',
'MySQL',
'SMTP',
'CRM Integration'],
'visual_title' => 'From registration to follow-up.',
'visual_note' => 'WEB FORMS / EMAIL / CRM',
'overview' => 'A PHP/MySQL campaign application combining customer registration with administration, notification delivery, and configurable CRM delivery.',
'contributions' => ['Built registration and administration workflows with UTM parameters and source URL capture.',
'Implemented separate customer and internal email notifications, delivery history, and retry controls.',
'Prepared CRM delivery, database migrations, and deployment packages; supported hosting and SSL troubleshooting.'],
'outcome' => 'Made registration records and notification delivery easier to manage and troubleshoot.'
],
[
'id' => 'career',
'category' => 'cms',
'label' => 'WordPress development',
'title' => 'SENA Career',
'company' => 'SENA Development',
'description' => 'A custom recruitment theme with job discovery, flexible content, and contextual application forms.',
'tags' => ['WordPress',
'PHP',
'Bootstrap',
'Gravity Forms'],
'visual_title' => 'Find your next opportunity.',
'visual_note' => 'CUSTOM THEME / JOB FILTERS / FORMS',
'overview' => 'A WordPress recruitment theme covering job listings, job details, employee stories, and internship content.',
'contributions' => ['Created custom post types, taxonomies, and filters for job function, location, and employment type.',
'Integrated Gravity Forms applications with the relevant job context.',
'Built reusable content sections and Gutenberg block patterns for content editors.'],
'outcome' => 'Combined structured recruitment content with reusable publishing tools and job-specific applications.'
],
[
'id' => 'property-chat',
'category' => 'prototype',
'label' => 'Functional prototype',
'title' => 'Property Search Chat',
'company' => 'SENA · Prototype',
'description' => 'A rule-based property search interface with project cards, detail views, and a reusable embedded widget.',
'tags' => ['React',
'TypeScript',
'Node.js',
'Tailwind CSS'],
'visual_title' => 'A conversation about home.',
'visual_note' => 'RULE-BASED SEARCH / API / WIDGET',
'overview' => 'A functional prototype exploring property discovery through embedded and full-page chat interfaces. It uses rule-based search and remains a prototype.',
'contributions' => ['Built chat interfaces, project cards, detail views, and loading and error states.',
'Connected a Node.js backend to a property-serving API for project information, pricing, and availability.',
'Packaged a reusable widget with TypeScript declarations and scoped styles; added validation and automated tests.'],
'outcome' => 'A working prototype for evaluating conversational property discovery and widget integration.'
]];

$experience = [
    [
'period' => '2024 — Present',
'company' => 'SENA Development Pcl.',
'role' => 'Web Developer',
'summary' => 'Building and maintaining websites, PHP applications, and content workflows.',
'details' => ['Maintain and improve the corporate website and 22+ residential project sites.',
'Develop PHP/MySQL features for property discovery, campaign registration, and back-office management; customize WordPress recruitment content and forms.',
'Connect registration workflows with internal services and email notifications, and troubleshoot application and hosting issues.',
'Support campaign landing pages, responsive HTML email, technical SEO, and workflow automation.']
],
    ['period' => '2015 — 2024', 'company' => 'IT Ready Co., Ltd.', 'role' => 'Web Developer', 'summary' => 'Nine years of building responsive websites and custom CMS experiences.', 'details' => ['Developed and maintained WordPress and Drupal websites, themes, and plugins for 30+ corporate projects.', 'Turned wireframes and PSD designs into HTML, CSS, and JavaScript interfaces.', 'Created responsive email campaigns and optimized accessibility, compatibility, and performance.']],
    ['period' => '2011 — 2015', 'company' => 'Global Computer Network Co., Ltd.', 'role' => 'Webmaster', 'summary' => 'End-to-end web applications, site operations, and hands-on technical support.', 'details' => ['Analyzed requirements and built custom applications with HTML, PHP, CSS, jQuery, and MySQL.', 'Managed cross-browser compatibility, navigation, and troubleshooting.', 'Wrote technical documentation and trained end users.']],
    ['period' => '2010 — 2011', 'company' => 'Rattana Bundit University', 'role' => 'Corporate Image Department', 'summary' => 'Where visual design met the web.', 'details' => ['Translated structural layouts into HTML / CSS templates for the department website.', 'Designed logos, advertising banners, brochures, and other marketing assets.']],
];

$skills = [[
'number' => '01',
'title' => 'Frontend development',
'text' => 'Responsive interfaces across screens and browsers.',
'items' => ['HTML5',
'CSS3',
'JavaScript',
'jQuery',
'Bootstrap',
'Responsive Design']
],
[
'number' => '02',
'title' => 'PHP & databases',
'text' => 'Web applications, forms, and back-office tools.',
'items' => ['PHP',
'MySQL',
'PostgreSQL',
'CRUD',
'API Integration']
],
[
'number' => '03',
'title' => 'WordPress & CMS',
'text' => 'Structured content that teams can maintain.',
'items' => ['WordPress',
'Drupal',
'Custom Themes',
'Custom Post Types',
'Gravity Forms']
],
[
'number' => '04',
'title' => 'Modern web projects',
'text' => 'Hands-on project and prototype experience.',
'items' => ['React',
'TypeScript',
'Node.js',
'Tailwind CSS']
],
[
'number' => '05',
'title' => 'Development workflow',
'text' => 'From requirements to debugging and deployment.',
'items' => ['Git / GitHub',
'XAMPP',
'Docker',
'Codex',
'Cross-browser Testing']
],
[
'number' => '06',
'title' => 'Supporting capabilities',
'text' => 'Connecting websites with business workflows.',
'items' => ['Webhooks',
'n8n',
'Technical SEO',
'HTML Email',
'Photoshop']
]];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
