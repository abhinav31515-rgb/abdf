@extends('layouts.site')
@section('title', 'Search Results | '.$theme['brand']['property_name'])
@section('meta_description', 'Search results across rooms, offers, dining, and experiences.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Search Results</h1><p>Showing recommended pages for "suite with breakfast".</p></div></section>
<section class="section page-section">
    <div class="container cards">
        <article class="offer-card">
            <h3><a href="{{ route('site.rooms', ['brand' => $brandKey]) }}">Rooms & Suites</a></h3>
            <p>Explore room categories with breakfast-inclusive and club benefits rates.</p>
        </article>
        <article class="offer-card">
            <h3><a href="{{ route('site.offers', ['brand' => $brandKey]) }}">Seasonal Offers</a></h3>
            <p>Discover packages tailored for longer stays and weekend escapes.</p>
        </article>
        <article class="offer-card">
            <h3><a href="{{ route('site.booking.search', ['brand' => $brandKey]) }}">Book Now</a></h3>
            <p>Start a reservation with your selected dates and guest count.</p>
        </article>
    </div>
</section>
@endsection
