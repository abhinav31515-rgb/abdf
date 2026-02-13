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
        <a href="{{ route('admin.theme-settings', ['brand' => $brandKey]) }}" class="{{ request()->routeIs('admin.theme-settings') ? 'active' : '' }}"><i class="bi bi-palette"></i> Theme Settings</a>
        <a href="#"><i class="bi bi-layout-text-window-reverse"></i> Section Builder</a>
        <a href="#"><i class="bi bi-list"></i> Menu Manager</a>
        <a href="#"><i class="bi bi-images"></i> Media Library</a>
        <a href="#"><i class="bi bi-sliders"></i> SEO & Analytics</a>
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
