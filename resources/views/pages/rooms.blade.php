@extends('layouts.site')
@section('title', 'Rooms & Suites | '.$theme['brand']['property_name'])
@section('meta_description', 'Explore rooms and suites with premium amenities and city views.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Rooms & Suites</h1><p>Find the perfect room with your preferred view, layout, and inclusions.</p></div></section>
<section class="section"><div class="container">
    <div class="filters-bar"><span class="chip">2 Guests</span><span class="chip">King Bed</span><span class="chip">City View</span><span class="chip">Breakfast</span><span class="chip">Grid View</span></div>
    <div class="cards">
        @foreach($theme['rooms'] as $room)
            <article class="offer-card">
                <h3>{{ $room['name'] }}</h3>
                <p>{{ $room['size'] }} · {{ $room['view'] }}</p>
                <strong>{{ $room['price'] }}</strong>
                <p><a href="{{ route('site.rooms.detail', ['slug' => Illuminate\Support\Str::slug($room['name']), 'brand' => $brandKey]) }}">View Details</a></p>
            </article>
        @endforeach
    </div>
</div></section>
@endsection
