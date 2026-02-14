@extends('layouts.site')

@section('title', 'Dining | '.$theme['brand']['property_name'])
@section('meta_description', 'Explore luxury dining destinations and signature culinary experiences.')

@section('content')
<section class="sub-hero"><div class="container"><h1>Dining</h1><p>Distinct culinary destinations in one iconic address.</p></div></section>
<section class="section"><div class="container cards">@foreach($theme['dining'] as $restaurant)<article class="offer-card dining-card"><h3>{{ $restaurant['name'] }}</h3><p>{{ $restaurant['type'] }}</p><a href="{{ route('site.dining.detail', ['slug' => Illuminate\Support\Str::slug($restaurant['name']), 'brand' => $brandKey]) }}">View Restaurant</a></article>@endforeach</div></section>
@endsection
