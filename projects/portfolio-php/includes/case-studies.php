<?php
declare(strict_types=1);

// Public case-study copy. Local source references and editorial evidence live in docs.
$caseStudies = [
    'metro' => [
        'subtitle' => 'Connecting property discovery with the tools behind it.',
        'summary' => 'Custom PHP/MySQL applications developed with Codex assistance for Thai and international audiences. Project maps, filtered listings, details, and enquiries connect with back-office tools for maintaining the information.',
        'role' => 'Custom application development · frontend, PHP/MySQL & back office · Codex-assisted',
        'audience' => 'Property visitors and the team maintaining project content and enquiries',
        'scope' => 'Company project · implementation case study',
        'theme' => 'metro',
        'reading_time' => '5 minute read',
        'challenge' => [
            'title' => 'Two sides of the same website',
            'paragraphs' => [
                'The application needed to help visitors discover SENA projects by name, property type, and train line, then move from a map or listing to project information and an enquiry.',
                'The same information also needed a maintenance workflow: project images and descriptions, map marker positions, project classifications, active status, and enquiries associated with individual projects. The development scope covered both the public interface and these back-office tools.'
            ]
        ],
        'responsibilities' => [
            'Developed the Metro applications with Codex assistance, including map markers, filters, project details, and registration.',
            'Built administration for project records, images, logos, map positions, property types, and train lines.',
            'Implemented enquiry storage, project-based lead search, detail views, and CSV export.',
            'Applied prepared database statements, output escaping, CSRF checks, and image upload validation in the relevant workflows.'
        ],
        'flow_title' => 'From finding a project to following up',
        'flow' => [
            ['title' => 'Find', 'text' => 'Search by name, property type, or train line.'],
            ['title' => 'Explore', 'text' => 'Matching map markers and project cards lead to details.'],
            ['title' => 'Enquire', 'text' => 'Submit a form with the selected project context.'],
            ['title' => 'Manage', 'text' => 'Review enquiries by project and export records.']
        ],
        'decisions' => [
            [
                'title' => 'Use the same filter rules for cards and map markers',
                'implementation' => 'The frontend applies a shared matching function to the project name, type, and train-line values on both cards and markers. It also updates the empty state and the selected train-line overlay.',
                'reason' => 'A visitor should see the same set of projects in the list and on the map. Keeping the matching logic together makes that relationship easier to maintain.',
                'tradeoff' => 'Filtering runs in the browser over loaded project data. This is a simple interaction model; a much larger catalogue would need a separate review of server-side search and pagination.'
            ],
            [
                'title' => 'Store map positions as percentages of the artwork',
                'implementation' => 'The admin map picker converts a click into x and y percentages, clamps them to the 0–100 range, and previews the marker before the project is saved.',
                'reason' => 'Positions stay relative to the map when its display size changes, and editors can place a marker visually instead of working only with coordinates.',
                'tradeoff' => 'These positions describe an illustrated map, rather than geographic coordinates. Replacing the artwork with a different layout requires reviewing the saved positions.'
            ],
            [
                'title' => 'Keep enquiries connected to active project records',
                'implementation' => 'Submission processing validates the form and selected active project before storing the enquiry. The back office joins leads to project records and supports project filtering and export.',
                'reason' => 'The project relationship gives the team useful context when reviewing a visitor’s interest.',
                'tradeoff' => 'CSV export supports a handoff outside the website. An automated CRM handoff would require a separate integration and its own validation.'
            ]
        ],
        'delivery' => [
            'Visitors can narrow the available projects and move between the map, project details, and registration.',
            'Content administrators have tools to update project information, classification, images, display status, and marker placement.',
            'Enquiries retain the selected project relationship and can be searched, reviewed, and exported.'
        ],
        'outcome_note' => 'These are implemented capabilities. Conversion rates, sales impact, and time savings are not claimed because verified measurements are not available for this case study.',
        'review_points' => [
            'Compare the visible cards and markers after combining filters, resetting them, and opening a property-type URL.',
            'Check marker placement when the map is resized, zoomed, or panned, including touch interactions.',
            'Verify form handling for valid and invalid project selections, required fields, and CSRF tokens.',
            'Check that back-office lead filtering and CSV export preserve the project relationship.'
        ],
        'reflection' => 'The useful part of this project is the connection between the browsing experience and everyday maintenance. A map is only one part of the application; the project records, editor tools, and enquiry context are what make it maintainable.',
        'boundary' => 'This case study describes my development contributions and the application workflow. Company source code, customer records, and internal access are not included. The workflow illustration is explanatory, not a screenshot of the live website.',
        'next' => 'career'
    ],
    'career' => [
        'subtitle' => 'A recruitment website built around structured content.',
        'summary' => 'A custom WordPress recruitment theme connecting job discovery, job details, and applications, with content structures and reusable sections for the people maintaining the site.',
        'role' => 'Custom WordPress theme author · job-filter development & form integration',
        'audience' => 'Job applicants and recruitment content editors',
        'scope' => 'Company project · implementation case study',
        'theme' => 'career',
        'reading_time' => '5 minute read',
        'challenge' => [
            'title' => 'More than a list of vacancies',
            'paragraphs' => [
                'The recruitment website needed to combine open positions with job details, employee stories, internship content, and company information. Applicants needed a way to narrow the positions by job function, location, and employment type.',
                'The development scope also included the publishing workflow. Jobs and stories needed structured records, while landing-page content needed reusable sections that editors could work with in WordPress. Applications needed to carry the context of the job being viewed.'
            ]
        ],
        'responsibilities' => [
            'Wrote the custom WordPress recruitment theme, including the job archive, job detail templates, stories, and internship content.',
            'Created custom post types, job classifications, and administrative fields for structured recruitment content.',
            'Implemented combined job-function, location, and employment-type filters.',
            'Integrated Gravity Forms with the selected job ID, title, and URL, including rendering, validation, and submission hooks.',
            'Built reusable template sections and a Gutenberg landing-page pattern for editing content.'
        ],
        'flow_title' => 'Keep the selected job connected to the application',
        'flow' => [
            ['title' => 'Publish', 'text' => 'Editors maintain job records and classifications in WordPress.'],
            ['title' => 'Discover', 'text' => 'Applicants combine function, location, and employment filters.'],
            ['title' => 'Read', 'text' => 'A job detail page provides the selected position’s context.'],
            ['title' => 'Apply', 'text' => 'The configured form receives the job ID, title, and URL.']
        ],
        'decisions' => [
            [
                'title' => 'Separate job records from page layout',
                'implementation' => 'The theme registers job and story post types, job classifications, and administrative metadata. The job archive uses these records rather than a hand-maintained list embedded in a page.',
                'reason' => 'Structured content lets the same job information support listings, details, and application context. Editors have a defined place to maintain each record.',
                'tradeoff' => 'Registration and templates live in the custom theme. A future theme migration would need to preserve or move the content-model registration as well as the presentation.'
            ],
            [
                'title' => 'Combine filters using WordPress taxonomy queries',
                'implementation' => 'The archive sanitizes the GET parameters and builds a WordPress tax_query. Multiple selected filters are combined with an AND relation, and the selected values stay visible in the form.',
                'reason' => 'This makes the relationship between the selected criteria and returned positions explicit, while giving each filter state a URL that can be revisited.',
                'tradeoff' => 'The current archive retrieves all matching jobs. A substantially larger vacancy catalogue would need pagination and a review of query performance.'
            ],
            [
                'title' => 'Resolve application context from the job record',
                'implementation' => 'The integration resolves a job post and supplies its ID, title, and permalink to the configured Gravity Forms fields. It populates values before rendering and validation and reapplies the context before submission.',
                'reason' => 'Keeping job context attached to the form gives the application a clear reference to the position being viewed, including when the form is shown again after validation.',
                'tradeoff' => 'This depends on the correct Gravity Forms form and field configuration and an identifiable job context. Plugin activation and submission behavior need checking in the installed WordPress environment.'
            ],
            [
                'title' => 'Give editors reusable building blocks',
                'implementation' => 'The landing page is divided into template sections, and a Gutenberg pattern supplies editable page sections such as the introduction, benefits, and stories.',
                'reason' => 'Reusable sections give the site a consistent structure while allowing content editing through the existing WordPress workflow.',
                'tradeoff' => 'The pattern also contains starter content. Editors must replace sample text and images and distinguish static pattern content from sections backed by live records.'
            ]
        ],
        'delivery' => [
            'Applicants can browse structured vacancies and filter them by function, location, and employment type.',
            'Job detail templates and the configured application form share the selected job’s context.',
            'Editors have job and story records, administrative fields, reusable sections, and a landing-page pattern.'
        ],
        'outcome_note' => 'This describes the delivered theme functionality. Application growth, hiring speed, and editor time savings are not claimed without verified measurements.',
        'review_points' => [
            'Exercise single and combined taxonomy filters, reset behavior, and no-results states.',
            'Check that the chosen job ID, title, and URL remain attached after form validation and on submission.',
            'Check content editing, empty job lists, stories, and the replacement of pattern starter content.',
            'Verify responsive templates and Gravity Forms behavior in the configured WordPress installation.'
        ],
        'reflection' => 'The core of this work is making content and application context fit together. The custom theme handles presentation, but the job records and form hooks are what connect browsing a vacancy to submitting an application.',
        'boundary' => 'This case study describes my development contributions and the theme implementation. It does not publish applicant data, company source code, or administration access. The workflow illustration is explanatory, not a screenshot of a live recruitment system.',
        'next' => 'campaign'
    ],
    'campaign' => [
        'subtitle' => 'Connecting campaign websites with search and marketing channels.',
        'summary' => 'Website implementation within Corporate Marketing, Digital Channel & Marketing Technology. The latest work improves campaign landing pages, metadata, structured data, and crawler rules for SEO/AEO and ChatGPT Ads readiness, alongside technical optimization of company-group websites.',
        'role' => 'Web development & marketing technology · page implementation, search structure & crawler access',
        'audience' => 'Campaign visitors, search crawlers, and the Corporate Marketing team',
        'scope' => 'Company project · campaign website optimization',
        'theme' => 'campaign',
        'reading_time' => '4 minute read',
        'challenge' => [
            'title' => 'Prepare the website for the channels around it',
            'paragraphs' => [
                'The campaign website needed useful landing pages for visitors and a clear page structure for search and advertising systems. My latest work focused on the website paths and their landing pages, metadata, structured data, and crawler-access rules.',
                'This work sits within Corporate Marketing, Digital Channel & Marketing Technology. It also extends to technical SEO/AEO improvements across company-group websites, while the campaign application continues to support registration and follow-up workflows.'
            ]
        ],
        'responsibilities' => [
            'Improved campaign landing pages and website paths to support digital marketing and ChatGPT Ads readiness.',
            'Implemented page metadata and structured data to describe the information presented on the relevant pages.',
            'Adjusted robots.txt rules governing crawler access to campaign paths.',
            'Applied technical SEO/AEO improvements across company-group websites.',
            'Developed campaign registration, UTM and source URL capture, administrative workflows, and email/CRM handoffs.'
        ],
        'flow_title' => 'Four parts of campaign website readiness',
        'flow' => [
            ['title' => 'Landing page', 'text' => 'Prepare the campaign destination and visitor journey.'],
            ['title' => 'Metadata', 'text' => 'Describe the page and its campaign context.'],
            ['title' => 'Structured data', 'text' => 'Provide a machine-readable description of page information.'],
            ['title' => 'Crawler access', 'text' => 'Review the rules governing the relevant website paths.']
        ],
        'decisions' => [
            [
                'title' => 'Keep optimization connected to the landing page',
                'implementation' => 'The changes cover the campaign landing pages and their page metadata and structured data together.',
                'reason' => 'The visible page and its technical descriptions need to communicate the same campaign information.',
                'tradeoff' => 'Campaign content changes require reviewing these elements together. The implementation should be checked against the published page before each campaign update.'
            ],
            [
                'title' => 'Review access at the website-path level',
                'implementation' => 'robots.txt rules were adjusted for crawler access to the relevant campaign paths.',
                'reason' => 'A prepared landing page needs to be reachable by the intended crawler as well as by a visitor.',
                'tradeoff' => 'A path rule depends on the robots.txt file for the correct host. Hosting, redirects, and any upstream access controls also need review when validating reachability.'
            ],
            [
                'title' => 'Describe the delivery as website readiness',
                'implementation' => 'The portfolio records the landing-page, metadata, structured-data, and crawler-rule work that I performed.',
                'reason' => 'These are specific implementation contributions that can be discussed independently of campaign buying or performance reports.',
                'tradeoff' => 'Ranking, AI citations, ad approval, and conversion impact require separate evidence and ongoing measurement.'
            ]
        ],
        'delivery' => [
            'Campaign landing pages with updated metadata and structured data.',
            'Crawler-access rules addressing the relevant campaign website paths.',
            'Technical SEO/AEO improvements across company-group websites.',
            'Registration and follow-up workflows connecting the website with marketing operations.'
        ],
        'outcome_note' => 'This case study describes owner-confirmed implementation work. Search rankings, AI citations, ad delivery, and conversion gains have not been quantified in the portfolio.',
        'review_points' => [
            'Check landing-page availability, redirects, and the destination used for the campaign.',
            'Inspect rendered metadata and validate structured data against the visible page content.',
            'Check robots.txt at the root of the relevant host and how its rules apply to campaign paths.',
            'Review crawler reachability and any hosting access controls for the intended advertising/search channel.',
            'Keep implementation checks separate from campaign performance reports when presenting results.'
        ],
        'reflection' => 'Website development is part of the marketing channel. This work brings the visitor-facing page, its machine-readable descriptions, and access rules into the same implementation conversation.',
        'boundary' => 'This describes website implementation and optimization. It does not publish company source code, customer records, advertising-account credentials, or unverified campaign performance. The workflow is an explanatory illustration.',
        'next' => 'metro'
    ]
];
