@extends('layouts.site')
@section('title', 'Dining | '.$theme['brand']['property_name'])
@section('meta_description', 'Explore signature restaurants, bars, and culinary experiences.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Dining</h1><p>Discover destination restaurants, lounges, and chef-led concepts.</p></div></section>
<section class="section"><div class="container">
    <div class="filters-bar"><span class="chip">All</span><span class="chip">Fine Dining</span><span class="chip">All-Day Dining</span><span class="chip">Bar & Lounge</span><span class="chip">Private Dining</span></div>
    <div class="cards">
        @foreach($theme['dining'] as $restaurant)
        <article class="offer-card"><h3>{{ $restaurant['name'] }}</h3><p>{{ $restaurant['type'] }}</p><p>Open daily · 12:00 PM – 11:00 PM</p><a href="{{ route('site.dining.detail', ['slug' => Illuminate\Support\Str::slug($restaurant['name']), 'brand' => $brandKey]) }}">View Restaurant</a></article>
        @endforeach
    </div>
</div></section>
@endsection
