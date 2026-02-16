@extends('layouts.site')

@section('title', $room['name'].' | '.$theme['brand']['property_name'])
@section('meta_description', $room['name'].' with '.$room['view'].' and '.$room['size'].' at '.$theme['brand']['property_name'])

@section('content')
<section class="sub-hero"><div class="container"><h1>{{ $room['name'] }}</h1><p>{{ $room['size'] }} · {{ $room['view'] }}</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Room Overview</h3><p>Elegant interiors, curated amenities, premium sleep comfort, and personalized in-room services.</p><p><strong>{{ $room['price'] }}</strong></p><a class="cta" href="#">Reserve this room</a></div></div></section>
@endsection
