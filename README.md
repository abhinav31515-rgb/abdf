## Eros Shangri-La Inspired Laravel Theme + Admin Dashboard

This repository contains a Laravel-oriented scaffold that recreates the visual style of the Shangri-La New Delhi site, plus an admin dashboard inspired by prebuilt Laravel admin UI patterns.

### Included pages
- Public homepage (`/`) with premium hero, room cards, offer cards, dining section, wellness section, and booking CTA.
- Admin dashboard (`/admin/dashboard`) protected by Laravel `auth` middleware, with KPI cards, chart widgets, and enquiry table.

### File map
- `routes/web.php` - public and admin routes.
- `app/Http/Controllers/HomeController.php` - homepage content source.
- `app/Http/Controllers/Admin/DashboardController.php` - dashboard metrics, charts, and table data.
- `resources/views/home.blade.php` + `resources/views/layouts/site.blade.php` - guest-facing theme.
- `resources/views/admin/dashboard.blade.php` + `resources/views/layouts/admin.blade.php` - admin UI shell and widgets.
- `public/assets/css/site.css` and `public/assets/css/admin.css` - styling.

### To use in a full Laravel app
1. Create/install a Laravel app.
2. Copy these files into the matching paths.
3. Install your preferred pre-made admin UI package (AdminLTE / Filament / Orchid) and map dashboard widgets to real database data.
4. Enable auth scaffolding and run migrations.
5. Replace placeholder image/content with licensed hotel assets and live inventory/API data.
