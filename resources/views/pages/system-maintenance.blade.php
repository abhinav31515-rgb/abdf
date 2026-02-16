@extends('layouts.site')
@section('title', 'Maintenance | '.$theme['brand']['property_name'])
@section('meta_description', 'Scheduled maintenance in progress.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Scheduled Maintenance</h1><p>We will be back shortly with an improved experience.</p></div></section>
<section class="section"><div class="container detail-grid"><article class="offer-card"><h3>Maintenance Window</h3><p>Planned upgrade in progress. Booking availability may be briefly unavailable.</p></article><aside class="offer-card tone-soft"><h3>Immediate Assistance</h3><p>Please contact reservations for urgent support.</p><p><strong>{{ $theme['brand']['phone'] }}</strong></p></aside></div></section>
@endsection
