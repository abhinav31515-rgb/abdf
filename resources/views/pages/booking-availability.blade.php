@extends('layouts.site')
@section('title', 'Availability | '.$theme['brand']['property_name'])
@section('meta_description', 'View room availability, rates, and inclusions for your selected dates.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Availability & Rates</h1><p>Choose the room and rate that fits your stay plan.</p></div></section>
<section class="section page-section"><div class="container cards"><article class="offer-card"><h3>Deluxe Room</h3><p>Best flexible rate</p><a class="cta" href="{{ route('site.booking.addons', ['brand' => $brandKey]) }}">Select</a></article><article class="offer-card"><h3>Executive Suite</h3><p>Club benefits included</p><a class="cta" href="{{ route('site.booking.addons', ['brand' => $brandKey]) }}">Select</a></article></div></section>
@endsection
