@extends('layouts.site')
@section('title', 'Meetings & Events | '.$theme['brand']['property_name'])
@section('meta_description', 'Venue capacities, floor plans, and planning support for events.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Meetings & Events</h1><p>Host conferences, launches, and private gatherings in versatile venues.</p></div></section>
<section class="section"><div class="container detail-grid">
    <div class="cards"><article class="offer-card"><h3>Grand Ballroom</h3><p>Capacity: 420 theatre</p></article><article class="offer-card"><h3>Boardroom</h3><p>Capacity: 24 boardroom</p></article><article class="offer-card"><h3>Garden Terrace</h3><p>Capacity: 180 reception</p></article></div>
    <aside class="offer-card tone-soft"><h3>Planning Toolkit</h3><ul class="stack-list"><li>Floor plans and AV specs</li><li>Custom banquet menus</li><li>Dedicated event concierge</li></ul><a class="cta" href="{{ route('site.contact', ['brand' => $brandKey]) }}">Request Proposal</a></aside>
</div></section>
@endsection
