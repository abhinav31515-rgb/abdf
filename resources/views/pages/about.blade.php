@extends('layouts.site')
@section('title', 'About | '.$theme['brand']['property_name'])
@section('meta_description', 'Learn about our hotel story, hospitality philosophy, and service standards.')
@section('content')
<section class="sub-hero"><div class="container"><h1>About Us</h1><p>A legacy of hospitality and contemporary luxury service.</p></div></section>
<section class="section"><div class="container detail-grid"><article class="offer-card"><h3>Our Story</h3><p>{{ $theme['brand']['property_name'] }} blends global service standards with local cultural warmth and design-led experiences.</p><h3 class="mt-3">Service Philosophy</h3><p>Personalized, anticipatory hospitality with thoughtful details at each touchpoint.</p></article><aside class="offer-card tone-soft"><h3>Brand Pillars</h3><ul class="stack-list"><li>Warmth</li><li>Craft</li><li>Wellbeing</li><li>Reliability</li></ul></aside></div></section>
@endsection
