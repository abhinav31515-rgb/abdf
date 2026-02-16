@extends('layouts.site')
@section('title', 'About | '.$theme['brand']['property_name'])
@section('meta_description', 'Learn about our hotel story, hospitality philosophy, and service standards.')
@section('content')
<section class="sub-hero"><div class="container"><h1>About Us</h1><p>A legacy of hospitality and contemporary luxury service.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Our Story</h3><p>{{ $theme['brand']['property_name'] }} reflects global service standards with local cultural warmth.</p></div></div></section>
@endsection
