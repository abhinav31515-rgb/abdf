@extends('layouts.site')
@section('title', 'Wellness | '.$theme['brand']['property_name'])
@section('meta_description', 'Spa therapies, fitness, and holistic wellness experiences.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Wellness & Spa</h1><p>Restore mind and body with signature therapies and guided programmes.</p></div></section>
<section class="section"><div class="container detail-grid">
    <div class="cards"><article class="offer-card"><h3>Signature Spa</h3><p>Personalized treatments with premium products.</p></article><article class="offer-card"><h3>Hydro & Recovery</h3><p>Steam, sauna, and recovery rituals.</p></article><article class="offer-card"><h3>Fitness Studio</h3><p>Expert-led classes and personal training.</p></article></div>
    <aside class="offer-card tone-soft"><h3>Book Appointment</h3><p>Open daily from 7:00 AM to 10:00 PM.</p><a class="cta" href="{{ route('site.contact', ['brand' => $brandKey]) }}">Reserve Session</a></aside>
</div></section>
@endsection
