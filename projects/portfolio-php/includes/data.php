<?php
declare(strict_types=1);

// Professional content and project roles confirmed by the portfolio owner.
// Display text is escaped in the templates.
$profile = [
'name' => 'Watchiraporn Suphachrunsap',
'first_name' => 'Watchiraporn',
'role' => 'Senior Web Developer',
'email' => 'wachiraporn.supha@gmail.com',
'location' => 'Bangkok, Thailand',
'github' => 'https://github.com/BowwiiDev',
'habitat' => 'projects/habitat/',
'resume' => 'assets/documents/Watchiraporn-Suphachrunsap-Web-Developer.pdf'
];

$projects = [[
'id' => 'metro',
'case_study' => true,
'category' => 'php',
'label' => 'Custom PHP application',
'title' => 'SENA Metro & Metro International',
'company' => 'SENA Development',
'description' => 'Custom property discovery applications with map filters, project details, and enquiry workflows for Thai and international audiences.',
'tags' => ['PHP',
'MySQL',
'JavaScript'],
'visual_title' => 'Find a place. Explore the map.',
'visual_note' => 'MAP SEARCH / PROJECT DETAILS / ADMIN',
'overview' => 'A custom PHP/MySQL property discovery project, developed with Codex assistance, with Thai and international public websites, map filters, project details, enquiries, and back-office tools.',
'contributions' => ['Developed the Metro applications with Codex assistance, including map-based discovery, filters, project detail pages, and registration workflows.',
'Built administration for projects, images, property types, train lines, map positions, lead search, and CSV export.',
'Used prepared statements, output escaping, CSRF checks, and upload validation.'],
'outcome' => 'Connected property browsing with practical content and lead management in one application.',
'role_note' => 'Custom application development with Codex assistance.',
'links' => [[
'label' => 'Visit Metro',
'url' => 'https://map.sena.co.th/metro/'
],
[
'label' => 'Visit Metro International',
'url' => 'https://map.sena.co.th/metro-inter/'
]]
],
[
'id' => 'career',
'case_study' => true,
'category' => 'cms',
'label' => 'Custom WordPress theme',
'title' => 'SENA Career',
'company' => 'SENA Development',
'description' => 'A WordPress recruitment website with a theme I wrote and job filters I developed.',
'tags' => ['WordPress',
'PHP',
'Bootstrap',
'Gravity Forms'],
'visual_title' => 'Find your next opportunity.',
'visual_note' => 'CUSTOM THEME / JOB FILTERS / FORMS',
'overview' => 'A WordPress recruitment theme covering job listings, job details, employee stories, and internship content.',
'contributions' => ['Wrote the custom WordPress theme and developed job-function, location, and employment-type filters.',
'Integrated Gravity Forms applications with the relevant job context.',
'Built reusable content sections and Gutenberg block patterns for content editors.'],
'outcome' => 'Combined structured recruitment content with reusable publishing tools and job-specific applications.',
'role_note' => 'Wrote the WordPress theme and developed the job filters.',
'links' => [[
'label' => 'Visit SENA Career',
'url' => 'https://career.senaidea.com/'
]]
],
[
'id' => 'rentnex',
'category' => 'customization',
'label' => 'WordPress theme customization',
'title' => 'RentNex',
'company' => 'Sen X',
'description' => 'A rental property website with project listings, property details, and registration content.',
'tags' => ['WordPress',
'Theme Customization'],
'overview' => 'A rental property website with project listings, property details, and registration content. My role was to customize an existing WordPress theme for the business website.',
'role_note' => 'Customized an existing WordPress theme.',
'contributions' => ['Customized a ready-made WordPress theme to suit RentNex and its website requirements.'],
'outcome' => 'Delivered a business website using an adapted WordPress theme.',
'links' => [[
'label' => 'Visit RentNex',
'url' => 'https://rentnex.senxgroup.com/'
]]
],
[
'id' => 'green-auto',
'category' => 'customization',
'label' => 'WordPress theme customization',
'title' => 'SENA Green Auto',
'company' => 'SENA Development',
'description' => 'An automotive business website presenting EV brands, services, news, and contact options.',
'tags' => ['WordPress',
'Theme Customization'],
'overview' => 'An automotive business website presenting EV brands, services, news, and contact options. My role was to customize an existing WordPress theme for the business website.',
'role_note' => 'Customized an existing WordPress theme.',
'contributions' => ['Customized a ready-made WordPress theme to suit SENA Green Auto and its website requirements.'],
'outcome' => 'Delivered a business website using an adapted WordPress theme.',
'links' => [[
'label' => 'Visit SENA Green Auto',
'url' => 'https://senagreenauto.co.th/'
]]
],
[
'id' => 'logistics',
'category' => 'customization',
'label' => 'WordPress theme customization',
'title' => 'SENA Logistics',
'company' => 'SENA Development',
'description' => 'A business website presenting warehouse project information, location, specifications, and enquiries.',
'tags' => ['WordPress',
'Theme Customization'],
'overview' => 'A business website presenting warehouse project information, location, specifications, and enquiries. My role was to customize an existing WordPress theme for the business website.',
'role_note' => 'Customized an existing WordPress theme.',
'contributions' => ['Customized a ready-made WordPress theme to suit SENA Logistics and its website requirements.'],
'outcome' => 'Delivered a business website using an adapted WordPress theme.',
'links' => [[
'label' => 'Visit SENA Logistics',
'url' => 'https://logistics.sena.co.th/'
]]
],
[
'id' => 'campaign',
'case_study' => true,
'links' => [],
'category' => 'martech',
'label' => 'Campaign web & marketing technology',
'title' => 'SENA Break Every Limit',
'company' => 'SENA Development',
'description' => 'Campaign landing pages, metadata, structured data, and crawler rules for SEO/AEO and ChatGPT Ads readiness, alongside registration workflows.',
'tags' => ['PHP',
'Technical SEO',
'AEO',
'Structured Data',
'ChatGPT Ads Readiness'],
'visual_title' => 'Campaign pages built to be understood.',
'visual_note' => 'LANDING PAGES / METADATA / CRAWLER ACCESS',
'overview' => 'Campaign website development and optimization within Corporate Marketing, Digital Channel & Marketing Technology. The latest work covers landing pages, page metadata, structured data, and robots.txt rules for campaign paths to support SEO/AEO and prepare landing pages for ChatGPT Ads. The application also includes PHP/MySQL registration and follow-up workflows.',
'role_note' => 'Website implementation and optimization: landing pages, metadata, structured data, and crawler rules.',
'contributions' => ['Improved campaign landing pages and URL paths for SEO/AEO and ChatGPT Ads readiness.',
'Implemented page metadata and structured data, and adjusted robots.txt rules governing crawler access to campaign paths.',
'Applied technical SEO/AEO improvements across company-group websites within Corporate Marketing, Digital Channel & Marketing Technology.',
'Built registration and administration workflows with UTM parameters and source URL capture.',
'Implemented separate customer and internal email notifications, delivery history, and retry controls.',
'Prepared CRM delivery, database migrations, and deployment packages; supported hosting and SSL troubleshooting.'],
'outcome' => 'Delivered campaign page and crawler-access improvements alongside manageable registration and notification workflows. Search visibility, ad performance, and conversion gains have not been quantified.'
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

$experience = [[
'period' => '2024 — Present',
'company' => 'SENA Development Pcl.',
'role' => 'Web Developer',
'summary' => 'Corporate Marketing · Digital Channel & Marketing Technology. Building web applications and improving campaign and company-group websites.',
'details' => ['Maintain and improve the corporate website and 22+ residential project sites.',
'Develop PHP/MySQL applications with Codex assistance for Metro property discovery; write the SENA Career WordPress theme and job filters.',
'Customize existing WordPress themes for RentNex, SENA Green Auto, and SENA Logistics.',
'Connect registration workflows with internal services and email notifications, and troubleshoot application and hosting issues.',
'Improve campaign landing pages, metadata, structured data, and robots.txt rules for campaign paths to support SEO/AEO and ChatGPT Ads readiness.',
'Apply technical SEO/AEO improvements across company-group websites; support responsive HTML email and workflow automation.']
],
[
'period' => '2015 — 2024',
'company' => 'IT Ready Co., Ltd.',
'role' => 'Web Developer',
'summary' => 'Nine years of building responsive websites and custom CMS experiences.',
'details' => ['Developed and maintained WordPress and Drupal websites, themes, and plugins for 30+ corporate projects.',
'Turned wireframes and PSD designs into HTML, CSS, and JavaScript interfaces.',
'Created responsive email campaigns and optimized accessibility, compatibility, and performance.']
],
[
'period' => '2011 — 2015',
'company' => 'Global Computer Network Co., Ltd.',
'role' => 'Webmaster',
'summary' => 'End-to-end web applications, site operations, and hands-on technical support.',
'details' => ['Analyzed requirements and built custom applications with HTML, PHP, CSS, jQuery, and MySQL.',
'Managed cross-browser compatibility, navigation, and troubleshooting.',
'Wrote technical documentation and trained end users.']
],
[
'period' => '2010 — 2011',
'company' => 'Rattana Bundit University',
'role' => 'Corporate Image Department',
'summary' => 'Where visual design met the web.',
'details' => ['Translated structural layouts into HTML / CSS templates for the department website.',
'Designed logos, advertising banners, brochures, and other marketing assets.']
]];

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
'Cross-browser Testing',
'n8n / Webhooks']
],
[
'number' => '06',
'title' => 'Marketing technology',
'text' => 'Website implementation for digital campaigns and search discovery.',
'items' => ['Campaign Landing Pages',
'Technical SEO',
'AEO',
'Metadata',
'Structured Data',
'robots.txt / Crawler Rules',
'ChatGPT Ads Readiness',
'HTML Email',
'Photoshop']
]];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
