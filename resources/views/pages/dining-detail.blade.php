@extends('layouts.site')

@section('title', $restaurant['name'].' | Dining')
@section('meta_description', $restaurant['type'].' at '.$theme['brand']['property_name'])

@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>{{ $restaurant['name'] }}</h1><p>{{ $restaurant['type'] }}</p></div></section>
<section class="section page-section"><div class="container"><div class="offer-card"><h3>Concept</h3><p>A refined culinary setting with curated ingredients, crafted menus, and signature service standards.</p><a class="cta" href="#">Reserve a Table</a></div></div></section>
@endsection
