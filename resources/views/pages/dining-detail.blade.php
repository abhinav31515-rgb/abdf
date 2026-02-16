@extends('layouts.site')
@section('title', $restaurant['name'].' | '.$theme['brand']['property_name'])
@section('meta_description', 'Restaurant concept, timings, and reservations.')
@section('content')
<section class="sub-hero"><div class="container"><h1>{{ $restaurant['name'] }}</h1><p>{{ $restaurant['type'] }} inspired by contemporary global and local cuisine.</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card"><h3>Concept Story</h3><p>Seasonal ingredients, artistic plating, and warm service define the dining narrative.</p><h3>Menu Highlights</h3><ul class="stack-list"><li>Signature tasting menu</li><li>Chef's regional specials</li><li>Vegetarian and wellness selections</li></ul></article>
    <aside class="offer-card tone-soft"><h3>Plan Your Visit</h3><table class="info-table"><tr><th>Lunch</th><td>12:00 PM – 3:00 PM</td></tr><tr><th>Dinner</th><td>7:00 PM – 11:00 PM</td></tr><tr><th>Dress Code</th><td>Smart casual</td></tr></table><a class="cta" href="{{ route('site.contact', ['brand' => $brandKey]) }}">Reserve a Table</a></aside>
</div></section>
@endsection
