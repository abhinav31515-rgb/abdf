<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $theme['brand']['property_name'])</title>
    <meta name="description" content="@yield('meta_description', 'Luxury hotel experience with premium rooms, dining, and curated offers.')">
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
    <style>
        :root {
            --brand-primary: {{ $theme['appearance']['primary'] }};
            --brand-secondary: {{ $theme['appearance']['secondary'] }};
            --brand-surface: {{ $theme['appearance']['surface'] }};
        }
    </style>
</head>
<body>
<header class="site-header">
    <div class="utility-bar">
        <div class="container utility-wrap">
            <span>{{ $theme['brand']['property_name'] }}</span>
            <div class="utility-links">
                <a href="#">Sign In</a>
                <a href="#">Join</a>
                <a href="#">My Bookings</a>
                <a href="#booking" class="book-link">Book Now</a>
            </div>
        </div>
    </div>

    <div class="main-nav-shell">
        <div class="container nav-wrap">
            <a class="brand-mark" href="{{ route('home', ['brand' => $brandKey]) }}">
                <strong>{{ $theme['brand']['code'] }}</strong>
                <span>{{ $theme['brand']['name'] }}</span>
            </a>
            <nav>
                <a href="{{ route('site.rooms', ['brand' => $brandKey]) }}">Rooms</a>
                <a href="{{ route('site.dining', ['brand' => $brandKey]) }}">Dining</a>
                <a href="{{ route('site.offers', ['brand' => $brandKey]) }}">Offers</a>
                <a href="{{ route('site.gallery', ['brand' => $brandKey]) }}">Gallery</a>
                <a href="{{ route('site.contact', ['brand' => $brandKey]) }}">Contact</a>
            </nav>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer id="contact" class="footer">
    <div class="container footer-grid">
        <div>
            <h3>{{ $theme['brand']['property_name'] }}</h3>
            <p>{{ $theme['brand']['address'] }}</p>
            <p>{{ $theme['brand']['phone'] }}</p>
        </div>
        <div>
            <h4>Explore</h4>
            <p><a href="{{ route('site.rooms', ['brand' => $brandKey]) }}">Rooms & Suites</a></p>
            <p><a href="{{ route('site.dining', ['brand' => $brandKey]) }}">Dining</a></p>
            <p><a href="{{ route('site.offers', ['brand' => $brandKey]) }}">Offers</a></p>
        </div>
        <div>
            <h4>Brand Switch</h4>
            <p>Current: {{ $brandKey }}</p>
            <p>Use <code>?brand=eros</code> for theme preview.</p>
        </div>
    </div>
</footer>
</body>
</html>
