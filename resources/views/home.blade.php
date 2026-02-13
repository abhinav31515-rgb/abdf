@extends('layouts.site')

@section('title', 'Eros Hotel New Delhi | Luxury Stay')

@section('content')
<section class="hero">
    <div class="overlay">
        <div class="container hero-content">
            <p class="eyebrow">Shangri-La Inspired Experience</p>
            <h1>Urban Luxury in the Heart of New Delhi</h1>
            <p class="lead">An elevated recreation of the Shangri-La visual language: refined tones, spacious sections, and premium hospitality storytelling.</p>
            <div class="hero-actions">
                <a href="#offers" class="cta">Explore Offers</a>
                <a href="#stay" class="cta ghost">View Rooms</a>
            </div>
        </div>
    </div>
</section>

<section id="stay" class="section intro">
    <div class="container">
        <div class="section-head">
            <h2>Rooms & Suites</h2>
            <p>Crafted for business and leisure travelers with understated luxury and panoramic city perspectives.</p>
        </div>
        <div class="cards rooms-grid">
            @foreach ($rooms as $room)
                <article class="offer-card room-card">
                    <h3>{{ $room['name'] }}</h3>
                    <p>{{ $room['size'] }} · {{ $room['view'] }}</p>
                    <strong>{{ $room['price'] }}</strong>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="offers" class="section offers">
    <div class="container">
        <div class="section-head">
            <h2>Featured Offers</h2>
            <p>Seasonal packages inspired by city culture, wellness, and indulgent culinary journeys.</p>
        </div>
        <div class="cards">
            @foreach ($offers as $offer)
                <article class="offer-card">
                    <span class="pill">{{ $offer['tag'] }}</span>
                    <h3>{{ $offer['title'] }}</h3>
                    <p>{{ $offer['description'] }}</p>
                    <a href="#">View Details</a>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="dining" class="section dining">
    <div class="container">
        <div class="section-head">
            <h2>Dining Destinations</h2>
            <p>Distinct restaurants and lounges inspired by the sophistication of New Delhi luxury hospitality.</p>
        </div>
        <div class="cards">
            @foreach ($dining as $restaurant)
                <article class="offer-card dining-card">
                    <h3>{{ $restaurant['name'] }}</h3>
                    <p>{{ $restaurant['type'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="wellness" class="section wellness">
    <div class="container">
        <h2>Wellness & Lifestyle</h2>
        <p>Signature spa rituals, curated nutrition, and private sessions designed for complete renewal.</p>
    </div>
</section>

<section id="booking" class="section booking">
    <div class="container booking-box">
        <h2>Reserve Your Stay</h2>
        <p>Check availability, compare room categories, and unlock exclusive member benefits.</p>
        <a href="#" class="cta">Start Booking</a>
    </div>
</section>
@endsection
