@extends('layouts.site')
@section('title', 'Experiences | '.$theme['brand']['property_name'])
@section('meta_description', 'Explore destination experiences and cultural highlights around the property.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Experiences</h1><p>Curated local discoveries and destination experiences.</p></div></section>
<section class="section"><div class="container cards">@foreach($theme['features'] as $feature)<article class="offer-card"><h3>{{ $feature['title'] }}</h3><p>{{ $feature['description'] }}</p></article>@endforeach</div></section>
@endsection
