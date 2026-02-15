@extends('layouts.site')
@section('title', 'Sitemap | '.$theme['brand']['property_name'])
@section('meta_description', 'Browse all website pages from a single index.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Sitemap</h1><p>A complete index of key journeys and information pages.</p></div></section>
<section class="section">
    <div class="container cards">
        <article class="offer-card">
            <h3>Stay</h3>
            <ul class="link-list">
                <li><a href="{{ route('site.rooms', ['brand' => $brandKey]) }}">Rooms & Suites</a></li>
                <li><a href="{{ route('site.offers', ['brand' => $brandKey]) }}">Offers</a></li>
                <li><a href="{{ route('site.booking.search', ['brand' => $brandKey]) }}">Booking Search</a></li>
                <li><a href="{{ route('site.booking.manage', ['brand' => $brandKey]) }}">Manage Booking</a></li>
            </ul>
        </article>
        <article class="offer-card">
            <h3>Lifestyle</h3>
            <ul class="link-list">
                <li><a href="{{ route('site.dining', ['brand' => $brandKey]) }}">Dining</a></li>
                <li><a href="{{ route('site.wellness', ['brand' => $brandKey]) }}">Wellness</a></li>
                <li><a href="{{ route('site.experiences', ['brand' => $brandKey]) }}">Experiences</a></li>
                <li><a href="{{ route('site.gallery', ['brand' => $brandKey]) }}">Gallery</a></li>
            </ul>
        </article>
        <article class="offer-card">
            <h3>Information</h3>
            <ul class="link-list">
                <li><a href="{{ route('site.about', ['brand' => $brandKey]) }}">About</a></li>
                <li><a href="{{ route('site.contact', ['brand' => $brandKey]) }}">Contact</a></li>
                <li><a href="{{ route('site.legal', ['brand' => $brandKey]) }}">Terms & Privacy</a></li>
                <li><a href="{{ route('site.faq', ['brand' => $brandKey]) }}">FAQ</a></li>
            </ul>
        </article>
    </div>
</section>
@endsection
