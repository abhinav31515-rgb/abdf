@extends('layouts.site')

@section('title', 'Rooms & Suites | '.$theme['brand']['property_name'])
@section('meta_description', 'Explore premium rooms and suites with city views, elegant interiors, and luxury amenities.')

@section('content')
<section class="sub-hero">
    <div class="container"><h1>Rooms & Suites</h1><p>Crafted for comfort, designed for memorable stays.</p></div>
</section>
<section class="section">
    <div class="container cards">
        @foreach($theme['rooms'] as $room)
            <article class="offer-card">
                <h3>{{ $room['name'] }}</h3>
                <p>{{ $room['size'] }} · {{ $room['view'] }}</p>
                <strong>{{ $room['price'] }}</strong>
                <p><a href="{{ route('site.rooms.detail', ['slug' => Illuminate\Support\Str::slug($room['name']), 'brand' => $brandKey]) }}">View Details</a></p>
            </article>
        @endforeach
    </div>
</section>
@endsection
