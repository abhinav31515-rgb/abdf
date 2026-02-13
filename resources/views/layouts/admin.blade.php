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
        <h2><i class="bi bi-buildings"></i> Hotel Admin</h2>
        <a href="{{ route('admin.dashboard') }}" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-calendar-check"></i> Bookings</a>
        <a href="#"><i class="bi bi-door-open"></i> Rooms</a>
        <a href="#"><i class="bi bi-tags"></i> Offers</a>
        <a href="#"><i class="bi bi-people"></i> Guests</a>
        <a href="#"><i class="bi bi-graph-up-arrow"></i> Reports</a>
    </aside>

    <section class="admin-main">
        <header class="admin-header">
            <div>
                <h1>@yield('header', 'Dashboard')</h1>
                <small>Luxury hotel operations snapshot</small>
            </div>
            <button class="btn btn-success"><i class="bi bi-download"></i> Export Report</button>
        </header>

        @yield('content')
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
@stack('scripts')
</body>
</html>
