@extends('layouts.site')
@section('title', 'Checkout | '.$theme['brand']['property_name'])
@section('meta_description', 'Complete guest details and payment to confirm your reservation.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Checkout</h1><p>Review your booking, enter details, and pay securely.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Guest & Payment</h3><p>Guest information, billing, and secure payment module placeholder.</p><a class="cta" href="{{ route('site.booking.confirmation', ['brand' => $brandKey]) }}">Complete Booking</a></div></div></section>
@endsection
