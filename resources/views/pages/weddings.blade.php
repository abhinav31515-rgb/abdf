@extends('layouts.site')
@section('title', 'Weddings | '.$theme['brand']['property_name'])
@section('meta_description', 'Destination wedding venues, rituals, and bespoke planning.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Weddings</h1><p>Celebrate timeless moments with curated ceremonies and signature hospitality.</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card"><h3>Wedding Journey</h3><div class="timeline"><div class="step"><strong>Step 1:</strong> Venue walkthrough and concept design</div><div class="step"><strong>Step 2:</strong> Menu tasting and guest planning</div><div class="step"><strong>Step 3:</strong> Ceremony execution and stay coordination</div></div></article>
    <aside class="offer-card tone-soft"><h3>Wedding Specialists</h3><p>From decor to curated rituals, our planners coordinate every detail end-to-end.</p><a class="cta" href="{{ route('site.contact', ['brand' => $brandKey]) }}">Plan Your Wedding</a></aside>
</div></section>
@endsection
