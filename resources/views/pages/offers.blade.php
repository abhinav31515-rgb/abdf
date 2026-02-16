@extends('layouts.site')
@section('title', 'Offers | '.$theme['brand']['property_name'])
@section('meta_description', 'Curated offers and seasonal packages for premium stays.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Offers</h1><p>Explore curated packages with premium inclusions and flexible terms.</p></div></section>
<section class="section"><div class="container">
    <div class="filters-bar"><span class="chip">All Offers</span><span class="chip">Stay Longer</span><span class="chip">Wellness</span><span class="chip">Dining</span><span class="chip">Family</span></div>
    <div class="cards">
        @foreach($theme['offers'] as $offer)
        <article class="offer-card"><span class="pill">{{ $offer['tag'] }}</span><h3>{{ $offer['title'] }}</h3><p>{{ $offer['description'] }}</p><p>Valid until 30 Sep 2026</p><a href="{{ route('site.offers.detail', ['slug' => Illuminate\Support\Str::slug($offer['title']), 'brand' => $brandKey]) }}">View Offer</a></article>
        @endforeach
    </div>
</div></section>
@endsection
