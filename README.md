## Multi-Brand Shangri-La-Inspired Laravel Theme + Admin CMS Scaffold

This scaffold is structured for **reusability across multiple hotel brands** with modular views and admin-editable controls.

### What is included
- Multi-brand theme repository backed by JSON files in `storage/themes/*.json`.
- Public homepage (`/`) that renders from reusable section partials.
- Admin dashboard (`/admin/dashboard`) with KPI cards and trends.
- Admin theme settings page (`/admin/theme-settings`) with save flow to theme JSON.
- Admin page manager (`/admin/pages`) for create/edit/delete, clone, draft-review-publish states, scheduling fields, and SEO controls.

### Reusable architecture
- `app/Support/BrandThemeRepository.php`
  - Loads/saves brand themes from JSON storage.
- `app/Support/PageRepository.php`
  - Loads/saves brand page definitions from JSON storage.
- `resources/views/site/sections/*`
  - Modular section rendering (`hero`, `rooms`, `offers`, `dining`, `feature-highlights`, `wellness`, `booking`).
- `resources/views/layouts/site.blade.php`
  - Header/menu and CSS variables driven by theme payload.
- `resources/views/admin/theme/settings.blade.php`
  - Editable form for brand/header/menu/hero/appearance settings.
- `resources/views/admin/pages/*`
  - Page management UI with basic publishing state and SEO controls.
- `app/Http/Requests/Admin/UpdateThemeSettingsRequest.php`
  - Validation for theme customization inputs.
- `app/Http/Requests/Admin/UpsertPageRequest.php`
  - Validation for page + SEO inputs.

### Routes
- `/` → Home page with optional `?brand=eros`.
- `/admin/dashboard?brand=eros`.
- `/admin/theme-settings?brand=eros`.
- `PUT /admin/theme-settings/{brand}` for persisting theme settings.
- `/admin/pages?brand=eros` (index/create/edit/delete/clone page records with lifecycle fields).

### Next production steps
1. Replace JSON storage with DB tables and revisioning.
2. Add drag/drop page ordering and redirect manager.
3. Add review approval notifications and scheduling automation jobs.
4. Add media manager with SEO image fields.
5. Add OTA/PMS connector execution per `tasks.md`.


### Frontend routes scaffolded
- `/rooms`, `/rooms/{slug}`
- `/offers`, `/offers/{slug}`
- `/dining`, `/dining/{slug}`
- `/gallery`, `/contact`

These are wired to Blade pages under `resources/views/pages/*` and use shared brand/theme payloads.
