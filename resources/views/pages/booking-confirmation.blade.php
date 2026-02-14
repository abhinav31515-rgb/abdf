@extends('layouts.site')
@section('title', 'Booking Confirmed | '.$theme['brand']['property_name'])
@section('meta_description', 'Your stay is confirmed. View booking details and next steps.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Booking Confirmed</h1><p>Thank you. Your reservation has been received.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Confirmation Details</h3><p>Booking reference, summary, and manage booking links appear here.</p><a class="cta" href="{{ route('home', ['brand' => $brandKey]) }}">Return Home</a></div></div></section>
@endsection
