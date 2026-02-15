@extends('layouts.site')
@section('title', 'Sitemap | '.$theme['brand']['property_name'])
@section('meta_description', 'Browse all website pages from a single index.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Sitemap</h1><p>A complete index of website sections and pages.</p></div></section>
<section class="section"><div class="container cards"><article class="offer-card"><h3>Stay</h3><p>Rooms, offers, booking.</p></article><article class="offer-card"><h3>Lifestyle</h3><p>Dining, wellness, experiences.</p></article><article class="offer-card"><h3>Information</h3><p>About, contact, legal, careers.</p></article></div></section>
@endsection
