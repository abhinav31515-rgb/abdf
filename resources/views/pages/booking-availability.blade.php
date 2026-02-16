@extends('layouts.site')
@section('title', 'Availability | '.$theme['brand']['property_name'])
@section('meta_description', 'View room availability, rates, and inclusions for your selected dates.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Room & Rate Selection</h1><p>Compare room categories, inclusions, and cancellation flexibility.</p></div></section>
<section class="section"><div class="container">
    <div class="filters-bar">
        <span class="chip">2 Guests</span><span class="chip">12–14 Aug</span><span class="chip">Breakfast Included</span><span class="chip">Flexible Rate</span><span class="chip">INR</span>
    </div>
    <div class="cards">
        @foreach($theme['rooms'] as $room)
        <article class="offer-card"><p class="kicker">Available</p><h3>{{ $room['name'] }}</h3><p>{{ $room['size'] }} · {{ $room['view'] }}</p><p><strong>{{ $room['price'] }}</strong> per night</p><a class="cta" href="{{ route('site.booking.addons', ['brand' => $brandKey]) }}">Select Rate</a></article>
        @endforeach
    </div>
</div></section>
@endsection
