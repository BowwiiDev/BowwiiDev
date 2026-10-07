# Watchiraporn - Web Developer Portfolio

A responsive, server-rendered personal portfolio built with PHP and Bootstrap. Created for [BowwiiDev](https://github.com/BowwiiDev), with Codex assistance.

[View the portfolio](https://bowwiidev.com/)

## Features

- Responsive layout with 14px page copy and clear heading hierarchy.
- PHP content arrays separated from the presentation template.
- Seven project summaries with category filters and Bootstrap project detail modals.
- Three full case studies: Metro, the SENA Career custom theme, and campaign website optimization.
- Corporate Marketing / Digital Channel & Marketing Technology experience, with a dedicated marketing technology filter.
- Six public website links, with confirmed development roles on cards, modals, and detail pages.
- Standalone project detail URLs, available without JavaScript.
- Experience sections, skill groups, and a downloadable two-page resume.
- Clipboard email action with a selection fallback.
- Local Bootstrap and font files; no runtime CDN dependency.
- Escaped dynamic text and JSON embedded with HTML-safe encoding.

## Run locally

Requires PHP 8.2+; no database, Composer, or npm installation.

```powershell
php -S 127.0.0.1:8082 -t .
```

Open **http://127.0.0.1:8082/**. With XAMPP, use `C:\xampp\php\php.exe` if PHP is not on PATH. Alternatively, put the project under XAMPP's `htdocs` and start Apache.

## Structure

```text
index.php                Main portfolio page
project.php              Project detail route (id allowlist)
includes/data.php        Profile, projects, experience, and skills
includes/case-studies.php Metro, Career, and campaign case-study content
assets/css/style.css     Design and responsive styles
assets/js/main.js        Filters, modal, navigation, and clipboard logic
assets/vendor/           Bootstrap and its license
assets/fonts/            Manrope and its license
assets/documents/        Resume PDF
docs/                    Preview and validation notes
```

## Content and project boundaries

The experience dates and figures are supplied by the resume owner. Company project descriptions are case-study summaries, and the illustrations are conceptual, not screenshots of internal systems. This repository contains the portfolio implementation, not SENA or IT Ready application source code. The resume phone number and professional email are intentionally included as contact information.

## Professional work and my role

| Project | Contribution | Public website |
| --- | --- | --- |
| SENA Metro & Metro International | Custom PHP/MySQL applications developed with Codex assistance | [Metro](https://map.sena.co.th/metro/) · [International](https://map.sena.co.th/metro-inter/) |
| SENA Career | Wrote the WordPress theme and developed job filters | [Career](https://career.senaidea.com/) |
| SENA Break Every Limit | Campaign landing pages, metadata, structured data, and crawler rules for SEO/AEO and ChatGPT Ads readiness | [Case study](https://bowwiidev.com/project.php?id=campaign) |
| RentNex | Customized an existing WordPress theme | [RentNex](https://rentnex.senxgroup.com/) |
| SENA Green Auto | Customized an existing WordPress theme | [Green Auto](https://senagreenauto.co.th/) |
| SENA Logistics | Customized an existing WordPress theme | [Logistics](https://logistics.sena.co.th/) |

The campaign case study covers owner-confirmed website optimization within Corporate Marketing, Digital Channel & Marketing Technology, alongside the existing registration/email/CRM workflows. It records implementation work without claiming measured ranking, AI citation, ad delivery, or conversion gains. Property Search Chat is a prototype; Habitat is a separate personal demo. Public links do not provide employer source code or administration access.

## Validation

See `docs/VERIFICATION.md` for the checks performed on this snapshot. Existing portfolio functionality was checked at mobile and desktop sizes, including filters, modals, direct routes, and resume download. The contact links open a local email or phone application; there is no server-side mail form.

## Hosting

Use a PHP-capable host. GitHub stores the code, but GitHub Pages does not execute PHP. A static export is a possible future alternative.

## ภาษาไทย

แก้ข้อมูลหลักที่ `includes/data.php`, โครงหน้าใน `index.php`, และสไตล์ใน `assets/css/style.css` โปรเจกต์นี้ใช้แสดงทักษะการจัดโครงสร้างหน้า การทำ Responsive และ PHP Rendering ไม่ต้องมีฐานข้อมูล

## Third-party assets

- Bootstrap 5.3.8 - MIT license in `assets/vendor/LICENSE`.
- Manrope - SIL Open Font License in `assets/fonts/OFL.txt`.
- Original HTML/CSS diagrams and SVG favicon generated for this portfolio.

No open-source license has been assigned to the original portfolio content. Please ask before reusing personal resume material.
