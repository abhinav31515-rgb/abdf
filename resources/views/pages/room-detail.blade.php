@extends('layouts.site')
@section('title', $room['name'].' | '.$theme['brand']['property_name'])
@section('meta_description', 'Room details, amenities, policies, and related recommendations.')
@section('content')
<section class="sub-hero"><div class="container"><h1>{{ $room['name'] }}</h1><p>{{ $room['size'] }} · {{ $room['view'] }} · From {{ $room['price'] }}</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card">
        <h3>Media Gallery</h3>
        <div class="gallery-grid"><div class="gallery-item">Room View</div><div class="gallery-item">Bathroom</div><div class="gallery-item">Lounge</div><div class="gallery-item">Workspace</div></div>
        <h3 class="mt-3">Amenities</h3>
        <ul class="stack-list"><li>High-speed Wi‑Fi</li><li>Luxury bath amenities</li><li>Smart TV and streaming</li><li>24/7 in-room dining</li></ul>
        <h3 class="mt-3">Policies</h3>
        <p>Check-in from 3:00 PM, check-out by 12:00 PM. Non-smoking room policy applies.</p>
    </article>
    <aside class="offer-card tone-soft">
        <h3>Sticky Booking Panel</h3>
        <p><strong>{{ $room['price'] }}</strong> per night</p>
        <a class="cta" href="{{ route('site.booking.search', ['brand' => $brandKey]) }}">Book This Room</a>
        <h3 class="mt-3">Similar Rooms</h3>
        <ul class="stack-list">
            @foreach(collect($theme['rooms'])->take(2) as $alt)
            <li><a href="{{ route('site.rooms.detail', ['slug' => Illuminate\Support\Str::slug($alt['name']), 'brand' => $brandKey]) }}">{{ $alt['name'] }}</a></li>
            @endforeach
        </ul>
    </aside>
</div></section>
@endsection
