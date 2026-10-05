# Local verification - 2 October 2026

Environment: Windows, PHP 8.2.12, MariaDB 10.4.32, headless Microsoft Edge via Playwright. Tests used a dedicated demonstration database with six fictional seed properties.

## Passed

- PHP syntax checks on all source files.
- 12 database-independent validation checks (`php tests/validation.php`).
- Keyword search, combined type/budget filters, and empty results.
- Literal `%` search and SQL-injection-like search strings returned no unintended matches.
- Unauthenticated admin access redirected to sign-in; incorrect passwords were rejected.
- A mutation without a CSRF token returned HTTP 403.
- Create, edit, draft, republish, and delete workflows completed.
- Stored HTML-like property names displayed as text rather than markup.
- Draft detail URLs returned 404; malformed array IDs returned 404.
- Opening the delete confirmation with GET did not delete a record.
- POST sign-out invalidated the authenticated session.
- Public page had no horizontal overflow at 320, 390, 768, and 1440px.
- Test-created property was removed; the six seed records remain.

Screenshots: `explorer-desktop.png`, `explorer-mobile.png`, and `admin-desktop.png`.

This is functional verification, not a penetration test, load test, or production-readiness certification. Login throttling remains session-scoped. Before a public deployment, review the limitations in README.md.
