@extends('layouts.site')
@section('title', 'Add-ons | '.$theme['brand']['property_name'])
@section('meta_description', 'Enhance your stay with curated services and personalized add-ons.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Add-ons & Enhancements</h1><p>Customize your stay with curated services and experiences.</p></div></section>
<section class="section"><div class="container detail-grid">
    <div class="cards">
        <article class="offer-card"><h3>Airport Transfer</h3><p>Private airport pick-up/drop-off service.</p><p><strong>INR 3,500</strong></p></article>
        <article class="offer-card"><h3>Spa Credit</h3><p>Wellness credit redeemable during stay.</p><p><strong>INR 4,000</strong></p></article>
        <article class="offer-card"><h3>Dining Experience</h3><p>Chef-curated set menu at signature restaurant.</p><p><strong>INR 5,200</strong></p></article>
    </div>
    <aside class="offer-card tone-soft"><h3>Current Total</h3><p>Room total: INR 43,400</p><p>Add-ons: INR 3,500</p><p><strong>Updated: INR 46,900</strong></p><a class="cta" href="{{ route('site.booking.guest-details', ['brand' => $brandKey]) }}">Continue</a></aside>
</div></section>
@endsection
