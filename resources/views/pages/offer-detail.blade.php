@extends('layouts.site')
@section('title', $offer['title'].' | '.$theme['brand']['property_name'])
@section('meta_description', 'Offer inclusions, terms, and direct booking details.')
@section('content')
<section class="sub-hero"><div class="container"><h1>{{ $offer['title'] }}</h1><p>{{ $offer['description'] }}</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card"><h3>Inclusions</h3><ul class="stack-list"><li>Luxury accommodation</li><li>Daily breakfast for two</li><li>Curated welcome amenity</li></ul><h3 class="mt-3">Exclusions</h3><ul class="stack-list"><li>Airport transfer unless selected</li><li>Taxes as applicable</li></ul></article>
    <aside class="offer-card tone-soft"><h3>Terms & Conditions</h3><p>Subject to availability. Blackout dates may apply.</p><p class="notice">Free cancellation up to 48 hours before arrival.</p><a class="cta" href="{{ route('site.booking.search', ['brand' => $brandKey]) }}">Book this Offer</a></aside>
</div></section>
@endsection
