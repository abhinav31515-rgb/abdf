<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eros Shangri-La Inspired')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
</head>
<body>
<header class="topbar">
    <div class="container nav-wrap">
        <div class="brand">EROS <span>NEW DELHI</span></div>
        <nav>
            <a href="#stay">Stay</a>
            <a href="#dining">Dining</a>
            <a href="#offers">Offers</a>
            <a href="#wellness">Wellness</a>
            <a href="#contact">Contact</a>
        </nav>
        <a class="book-btn" href="#booking">Book Now</a>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer id="contact" class="footer">
    <div class="container footer-grid">
        <div>
            <h3>Eros Hotel New Delhi - Inspired Layout</h3>
            <p>19, Ashoka Road, Connaught Place, New Delhi 110001</p>
            <p>+91 11 4119 1919</p>
        </div>
        <div>
            <h4>Quick Links</h4>
            <p>Rooms & Suites</p>
            <p>Dining</p>
            <p>Spa</p>
        </div>
        <div>
            <h4>Newsletter</h4>
            <p>Get exclusive offers and experiences.</p>
        </div>
    </div>
</footer>
</body>
</html>
