@extends('layouts.site')
@section('title', 'Guest Details | '.$theme['brand']['property_name'])
@section('meta_description', 'Enter guest information and requests before payment.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Guest Details</h1><p>Provide guest information and special requests.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Guest Information</h3><p>Primary guest details, contact info, and requests form placeholder.</p><a class="cta" href="{{ route('site.booking.payment', ['brand' => $brandKey]) }}">Continue to Payment</a></div></div></section>
@endsection
