# Local verification - 7 October 2026

Marketing technology content update, checked with PHP 8.2.12 and the Codex in-app browser on a local PHP server:

- Profile, current SENA experience, skills, campaign summary, modal and full case study include the owner-confirmed Corporate Marketing / Digital Channel & Marketing Technology scope.
- Campaign copy names landing pages, metadata, structured data and robots.txt rules for website paths, using SEO/AEO and ChatGPT Ads readiness wording without unverified performance claims.
- Three featured case studies render: Metro, Career and Campaign. The campaign modal links to its full case study; the next-case navigation uses the matching project title.
- Filters returned all 7, PHP 1, custom WordPress 1, marketing technology 1, theme customization 3 and prototype 1.
- The homepage had no horizontal overflow at 320, 390, 768 and 1440px; the campaign case page had no horizontal overflow at 320, 390 and 768px. Desktop and mobile views were inspected.
- No PHP warnings were present in the final homepage or campaign rendering, and no browser error/warning logs were observed during the checks.
- PHP and JavaScript syntax checks passed. All seven detail routes, their public links and role wording, and unknown/array-ID 404 handling passed the existing rendering checks.
- The updated resume remains two pages with selectable text; both rendered pages were visually inspected. The website, GitHub profile and source/deployment copies use the same revised PDF.

These checks cover the portfolio and documents. The company websites' crawler rules, search visibility, advertising delivery and conversion metrics were not independently tested in this update. Uploading the provided package is still required to update the public PHP host.

## Previous verification - 6 October 2026

The role-and-link update was checked locally on Windows with PHP 8.2.12 and the Codex in-app browser:

- PHP syntax checks passed for index.php, project.php, includes/data.php, and includes/case-studies.php. JavaScript syntax also passed.
- All seven detail routes rendered with the expected contribution wording and public website links; unknown and array IDs returned 404 in PHP rendering checks.
- Category filters returned two PHP applications, one custom WordPress project, three theme customizations, one prototype, and seven total projects.
- Metro, Career, and all three theme-customization modals displayed the expected links. Switching to the campaign modal removed links and role text from the previous project.
- The homepage had no horizontal overflow at 320, 390, 768, and 1440px. Desktop and mobile presentation were inspected.
- Metro and Career remain the two full case studies. Six public website URLs were added to featured work, relevant project cards, modals, and direct detail pages.
- The public company websites were reviewed separately on 6 October. Their administration interfaces and form submissions were not tested.

Archived screenshots in docs show an earlier version of the portfolio.

## Previous verification - 2 October 2026

PHP 8.2.12, Windows, headless Microsoft Edge via Playwright.

- PHP syntax checked for all three application files.
- Updated Web Developer positioning displayed correctly.
- No horizontal overflow at 320, 390, 768, 1024, and 1440px in the updated snapshot.
- All four case studies rendered; filters returned two PHP applications, one WordPress project, and one prototype.
- All four project details opened and closed in the Bootstrap modal and returned HTTP 200 on their standalone routes.
- GitHub links point to BowwiiDev. The Habitat section is labeled as a new personal demo with fictional data and Codex assistance.
- Main page copy remains 14px. Desktop and mobile screenshots were visually inspected.
- A standalone project page remained readable with JavaScript disabled.
- Unknown project route returned HTTP 404.
- Resume download response matched the new two-page PDF byte for byte.
- No JavaScript page errors were observed.

The original portfolio implementation was also checked at 320, 375, 390, 768, 1024, and 1440px, with navigation, all project modals, copy-email, and no-JavaScript detail navigation verified. The PDF was rendered and both pages visually inspected for readability and overflow.

These are local checks; external PHP hosting has not been configured or verified.
