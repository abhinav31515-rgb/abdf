@extends('layouts.site')

@section('title', 'Contact | '.$theme['brand']['property_name'])
@section('meta_description', 'Reach out for reservations, events, and concierge support.')

@section('content')
<section class="sub-hero"><div class="container"><h1>Contact</h1><p>We are here to assist with reservations and bespoke requests.</p></div></section>
<section class="section"><div class="container cards"><article class="offer-card"><h3>Address</h3><p>{{ $theme['brand']['address'] }}</p></article><article class="offer-card"><h3>Phone</h3><p>{{ $theme['brand']['phone'] }}</p></article><article class="offer-card"><h3>Email</h3><p>reservations@example.com</p></article></div></section>
@endsection
