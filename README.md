## Multi-Brand Shangri-La-Inspired Laravel Theme + Admin CMS Scaffold

This scaffold is structured for **reusability across multiple hotel brands** with modular views and admin customization surfaces.

### What is now included
- Multi-brand theme repository (`BrandThemeRepository`) with tokenized data (brand identity, appearance, menus, sections).
- Public homepage (`/`) that renders from reusable section partials.
- Admin dashboard (`/admin/dashboard`) with KPI cards and trends.
- Admin theme settings page (`/admin/theme-settings`) for brand/header/menu/appearance customization UX.

### Architecture for reusability
- `app/Support/BrandThemeRepository.php`
  - Central source for brand configs and section content.
  - Easy to replace with DB models/API.
- `resources/views/site/sections/*`
  - Fully modular section rendering (hero, rooms, offers, dining, highlights, wellness, booking).
  - Enables per-brand section composition.
- `resources/views/layouts/site.blade.php`
  - Header/menu and CSS tokens driven by theme payload.
- `resources/views/layouts/admin.blade.php` + `resources/views/admin/theme/settings.blade.php`
  - Dedicated admin UI for brand switching and settings surface.

### Routes
- `/` → Home page with optional `?brand=eros`.
- `/admin/dashboard?brand=eros`.
- `/admin/theme-settings?brand=eros`.

### Next production steps
1. Move `BrandThemeRepository` arrays into database tables.
2. Bind settings forms to save/update endpoints.
3. Add media upload and section reorder controls.
4. Add permissions/roles for content editors.
5. Add preview/publish workflow.
