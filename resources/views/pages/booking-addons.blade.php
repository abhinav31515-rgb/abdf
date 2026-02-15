@extends('layouts.site')
@section('title', 'Add-ons | '.$theme['brand']['property_name'])
@section('meta_description', 'Enhance your stay with curated services and personalized add-ons.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Add-ons & Enhancements</h1><p>Select additional services for a personalized stay.</p></div></section>
<section class="section"><div class="container cards"><article class="offer-card"><h3>Airport Transfer</h3><p>Private airport pick-up/drop-off service.</p></article><article class="offer-card"><h3>Spa Credit</h3><p>Wellness credit redeemable during stay.</p></article><article class="offer-card"><h3>Dining Experience</h3><p>Curated set menu at signature restaurant.</p></article></div><div class="container"><a class="cta" href="{{ route('site.booking.guest-details', ['brand' => $brandKey]) }}">Continue</a></div></section>
@endsection
