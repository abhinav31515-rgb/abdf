@extends('layouts.site')
@section('title', 'Booking Search | '.$theme['brand']['property_name'])
@section('meta_description', 'Start your booking by selecting dates, guests, and room preferences.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Start Your Booking</h1><p>Select dates and preferences to view live availability.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Booking Search</h3><p>Check-in, check-out, guests, and promo code fields go here.</p><a class="cta" href="{{ route('site.booking.availability', ['brand' => $brandKey]) }}">Check Availability</a></div></div></section>
@endsection
