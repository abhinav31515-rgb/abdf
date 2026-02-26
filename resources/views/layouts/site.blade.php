<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $theme['brand']['property_name'])</title>
    <meta name="description" content="@yield('meta_description', 'Luxury hotel experience with premium rooms, dining, and curated offers.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
    <style>
        :root {
            --brand-primary: {{ $theme['appearance']['primary'] }};
            --brand-secondary: {{ $theme['appearance']['secondary'] }};
            --brand-surface: {{ $theme['appearance']['surface'] }};
            --brand-bg: {{ $theme['appearance']['background'] ?? '#f8f9fb' }};
            --brand-text: {{ $theme['appearance']['text'] ?? '#111827' }};
            --brand-text-muted: {{ $theme['appearance']['text_muted'] ?? '#6b7280' }};
            --brand-border: {{ $theme['appearance']['border'] ?? '#e5e7eb' }};
            --brand-font: {{ $theme['appearance']['font_family'] ?? 'Inter, Arial, sans-serif' }};
            --brand-radius: {{ $theme['appearance']['radius'] ?? '10px' }};
            --brand-shadow: {{ $theme['appearance']['shadow'] ?? '0 12px 30px rgba(15,18,23,.12)' }};
        }
    </style>
</head>
<body data-header-style="{{ $theme['appearance']['header_style'] ?? 'glass-dark' }}">
<header class="site-header transparent" id="siteHeader">
    <div class="utility-bar" id="utilityBar">
        <div class="container utility-wrap">
            <span>{{ $theme['brand']['property_name'] }}</span>
            <div class="utility-links">
                <a href="#">{{ $theme['brand']['phone'] }}</a>
                <a href="#">EN | INR</a>
                <a href="{{ route('site.account.signin', ['brand' => $brandKey]) }}">Sign In</a>
                <a href="{{ route('site.account.signup', ['brand' => $brandKey]) }}">Join</a>
                <a href="{{ route('site.booking.search', ['brand' => $brandKey]) }}" class="book-link">Book Now</a>
            </div>
        </div>
    </div>

    <div class="main-nav-shell">
        <div class="container nav-wrap">
            <a class="brand-mark" href="{{ route('home', ['brand' => $brandKey]) }}">
                <strong>{{ $theme['brand']['code'] }}</strong>
                <span>{{ $theme['brand']['name'] }}</span>
            </a>

            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">☰</button>

            <nav id="siteNav">
                @foreach(($theme['menus'] ?? []) as $menu)
                    <a href="{{ $menu['anchor'] }}">{{ $menu['label'] }}</a>
                @endforeach
            </nav>

            <div class="quick-search">
                <select><option>{{ $theme['brand']['name'] }}</option></select>
                <input type="text" placeholder="Check-in · Check-out">
                <input type="text" placeholder="Guests">
                <a class="mini-cta" href="{{ route('site.booking.search', ['brand' => $brandKey]) }}">Search</a>
            </div>
        </div>

        <div class="mega-nav">
            <div class="container mega-grid">
                <article><h4>Stay</h4><p>Suites, club floors, and curated packages.</p></article>
                <article><h4>Dining</h4><p>Signature restaurants and destination bars.</p></article>
                <article><h4>Experiences</h4><p>Wellness, local culture, and private journeys.</p></article>
            </div>
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
<script>
const header = document.getElementById('siteHeader');
const menuToggle = document.getElementById('menuToggle');
const siteNav = document.getElementById('siteNav');
window.addEventListener('scroll', () => {
  if (window.scrollY > 60) header.classList.add('compact');
  else header.classList.remove('compact');
});
menuToggle?.addEventListener('click', () => siteNav.classList.toggle('open'));
</script>
</body>
</html>
