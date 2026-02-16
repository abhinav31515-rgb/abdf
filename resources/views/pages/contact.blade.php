@extends('layouts.site')
@section('title', 'Contact | '.$theme['brand']['property_name'])
@section('meta_description', 'Contact information, maps, and directions for your visit.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Contact & Directions</h1><p>Reach reservations, concierge, and event specialists.</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card"><h3>Get in Touch</h3><table class="info-table"><tr><th>Address</th><td>{{ $theme['brand']['address'] }}</td></tr><tr><th>Phone</th><td>{{ $theme['brand']['phone'] }}</td></tr><tr><th>Email</th><td>reservations@example.com</td></tr></table><p class="notice">Airport transfer and route planning assistance available 24/7.</p></article>
    <aside class="offer-card tone-soft"><h3>Map & Directions</h3><div class="map-box">Interactive map preview</div></aside>
</div></section>
@endsection
