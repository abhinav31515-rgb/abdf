## Multi-Brand Shangri-La-Inspired Laravel Theme + Admin CMS Scaffold

This scaffold is structured for **reusability across multiple hotel brands** with modular views and real admin-editable theme persistence.

### What is included
- Multi-brand theme repository backed by JSON files in `storage/themes/*.json`.
- Public homepage (`/`) that renders from reusable section partials.
- Admin dashboard (`/admin/dashboard`) with KPI cards and trends.
- Admin theme settings page (`/admin/theme-settings`) with a save flow that updates brand theme JSON.

### Reusable architecture
- `app/Support/BrandThemeRepository.php`
  - Loads/saves brand themes from JSON storage.
  - Can be swapped with DB/API implementation later.
- `resources/views/site/sections/*`
  - Modular section rendering (`hero`, `rooms`, `offers`, `dining`, `feature-highlights`, `wellness`, `booking`).
- `resources/views/layouts/site.blade.php`
  - Header/menu and CSS variables driven by theme payload.
- `resources/views/admin/theme/settings.blade.php`
  - Actual editable form for brand/header/menu/hero/appearance settings.
- `app/Http/Requests/Admin/UpdateThemeSettingsRequest.php`
  - Validation for admin customization inputs.

### Routes
- `/` → Home page with optional `?brand=eros`.
- `/admin/dashboard?brand=eros`.
- `/admin/theme-settings?brand=eros`.
- `PUT /admin/theme-settings/{brand}` for persisting settings.

### Next production steps
1. Replace JSON storage with DB tables.
2. Add section ordering and dynamic section enable/disable.
3. Add media manager and per-section assets.
4. Add revision history + preview/publish workflow.
5. Add permissions/roles for editors/reviewers.
