@extends('layouts.site')
@section('title', '404 | '.$theme['brand']['property_name'])
@section('meta_description', 'Requested page was not found.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Page Not Found</h1><p>We could not find the requested page. Let’s guide you back.</p></div></section>
<section class="section"><div class="container cards"><article class="offer-card"><h3>Popular Links</h3><p><a href="{{ route('site.rooms', ['brand' => $brandKey]) }}">Rooms & Suites</a></p><p><a href="{{ route('site.offers', ['brand' => $brandKey]) }}">Offers</a></p></article><article class="offer-card"><h3>Need Help?</h3><p>Contact reservations at {{ $theme['brand']['phone'] }}.</p></article></div></section>
@endsection
