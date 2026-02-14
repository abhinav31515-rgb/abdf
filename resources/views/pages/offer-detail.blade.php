@extends('layouts.site')

@section('title', $offer['title'].' | Offer')
@section('meta_description', $offer['description'])

@section('content')
<section class="sub-hero"><div class="container"><h1>{{ $offer['title'] }}</h1><p>{{ $offer['tag'] }}</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Offer Details</h3><p>{{ $offer['description'] }}</p><ul><li>Flexible dates subject to availability</li><li>Member benefits apply</li><li>Terms and conditions apply</li></ul><a class="cta" href="#">Book this offer</a></div></div></section>
@endsection
