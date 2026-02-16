@extends('layouts.site')
@section('title', 'Manage Booking | '.$theme['brand']['property_name'])
@section('meta_description', 'Manage existing reservations, update details, and request assistance.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Manage Booking</h1><p>Retrieve and modify your reservation details securely.</p></div></section>
<section class="section page-section"><div class="container"><div class="offer-card"><h3>Find Reservation</h3><p>Use booking reference and email to retrieve your booking.</p><a class="cta" href="#">Retrieve Booking</a></div></div></section>
@endsection
