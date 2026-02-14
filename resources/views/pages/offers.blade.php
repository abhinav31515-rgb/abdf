@extends('layouts.site')

@section('title', 'Offers | '.$theme['brand']['property_name'])
@section('meta_description', 'Discover exclusive offers, stay packages, and seasonal experiences.')

@section('content')
<section class="sub-hero"><div class="container"><h1>Offers</h1><p>Exclusive packages tailored for every stay occasion.</p></div></section>
<section class="section offers"><div class="container cards">@foreach($theme['offers'] as $offer)<article class="offer-card"><span class="pill">{{ $offer['tag'] }}</span><h3>{{ $offer['title'] }}</h3><p>{{ $offer['description'] }}</p><a href="{{ route('site.offers.detail', ['slug' => Illuminate\Support\Str::slug($offer['title']), 'brand' => $brandKey]) }}">View Offer</a></article>@endforeach</div></section>
@endsection
