@extends('layouts.site')
@section('title', 'Search Results | '.$theme['brand']['property_name'])
@section('meta_description', 'Search results across rooms, offers, dining, and experiences.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Search Results</h1><p>Results for your query across our website.</p></div></section>
<section class="section"><div class="container cards"><article class="offer-card"><h3>Rooms & Suites</h3><p>Explore room options matching your search.</p></article><article class="offer-card"><h3>Offers</h3><p>Relevant packages and limited-time deals.</p></article><article class="offer-card"><h3>Dining</h3><p>Restaurant and culinary experiences.</p></article></div></section>
@endsection
