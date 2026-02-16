<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
<div class="admin-shell">
    <aside class="sidebar">
        <h2><i class="bi bi-buildings"></i> Multi-Brand CMS</h2>

        <a href="{{ route('admin.dashboard', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-speedometer2"></i> Dashboard</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Brand</p>
        <a href="{{ route('admin.brand-overview', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.brand-overview') ? 'active' : '' }}"><i class="bi bi-award"></i> Brand Overview</a>
        <a href="{{ route('admin.brand-hierarchy', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.brand-hierarchy') ? 'active' : '' }}"><i class="bi bi-diagram-3"></i> Brand Hierarchy</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Content</p>
        <a href="{{ route('admin.theme-settings', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.theme-settings') ? 'active' : '' }}"><i class="bi bi-palette"></i> Theme Settings</a>
        <a href="{{ route('admin.pages.index', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.pages.*') ? 'active' : '' }}"><i class="bi bi-file-earmark-text"></i> Page Manager</a>
        <a href="{{ route('admin.section-builder', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.section-builder') ? 'active' : '' }}"><i class="bi bi-layout-text-window-reverse"></i> Section Builder</a>
        <a href="{{ route('admin.menu-manager', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.menu-manager') ? 'active' : '' }}"><i class="bi bi-list-nested"></i> Menu Manager</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Growth & Ops</p>
        <a href="{{ route('admin.seo-manager', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.seo-manager') ? 'active' : '' }}"><i class="bi bi-graph-up"></i> SEO Manager</a>
        <a href="{{ route('admin.seo-assistant', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.seo-assistant') ? 'active' : '' }}"><i class="bi bi-stars"></i> AI SEO Assistant</a>
        <a href="{{ route('admin.redirect-manager', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.redirect-manager') ? 'active' : '' }}"><i class="bi bi-sign-turn-right"></i> Redirect Manager</a>
        <a href="{{ route('admin.media-library', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.media-library') ? 'active' : '' }}"><i class="bi bi-images"></i> Media Library</a>
        <a href="{{ route('admin.gallery-manager', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.gallery-manager') ? 'active' : '' }}"><i class="bi bi-grid-3x3-gap"></i> Gallery Manager</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Reputation & Revenue</p>
        <a href="{{ route('admin.review-inbox', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.review-inbox') ? 'active' : '' }}"><i class="bi bi-chat-quote"></i> Review Inbox</a>
        <a href="{{ route('admin.moderation-rules', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.moderation-rules') ? 'active' : '' }}"><i class="bi bi-shield-check"></i> Moderation Rules</a>
        <a href="{{ route('admin.response-center', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.response-center') ? 'active' : '' }}"><i class="bi bi-reply"></i> Response Center</a>
        <a href="{{ route('admin.booking-center', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.booking-center') ? 'active' : '' }}"><i class="bi bi-journal-bookmark"></i> Booking Center</a>
        <a href="{{ route('admin.rates-inventory', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.rates-inventory') ? 'active' : '' }}"><i class="bi bi-calendar2-week"></i> Rates & Inventory</a>
        <a href="{{ route('admin.offers-packages', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.offers-packages') ? 'active' : '' }}"><i class="bi bi-gift"></i> Offers & Packages</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Integrations</p>
        <a href="{{ route('admin.ota-connectors', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.ota-connectors') ? 'active' : '' }}"><i class="bi bi-plug"></i> OTA Connectors</a>
        <a href="{{ route('admin.pms-connectors', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.pms-connectors') ? 'active' : '' }}"><i class="bi bi-hdd-network"></i> PMS Connectors</a>
        <a href="{{ route('admin.sync-center', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.sync-center') ? 'active' : '' }}"><i class="bi bi-arrow-repeat"></i> Sync Center</a>

        <p class="text-uppercase small mt-3 mb-1 opacity-75">Admin</p>
        <a href="{{ route('admin.reports-analytics', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.reports-analytics') ? 'active' : '' }}"><i class="bi bi-bar-chart-line"></i> Reports & Analytics</a>
        <a href="{{ route('admin.users-roles', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.users-roles') ? 'active' : '' }}"><i class="bi bi-people"></i> Users & Roles</a>
        <a href="{{ route('admin.system-support', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.system-support') ? 'active' : '' }}"><i class="bi bi-tools"></i> System & Support</a>
    </aside>

    <section class="admin-main">
        <header class="admin-header">
            <div>
                <h1>@yield('header', 'Dashboard')</h1>
                <small>Brand: <strong>{{ $brandList[$brandKey] ?? $brandKey }}</strong></small>
            </div>
            <form method="get" class="brand-switcher">
                <select name="brand" onchange="this.form.submit()">
                    @foreach($brandList as $key => $name)
                        <option value="{{ $key }}" @selected($brandKey === $key)>{{ $name }}</option>
                    @endforeach
                </select>
            </form>
        </header>

        @yield('content')
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
@stack('scripts')
</body>
</html>
