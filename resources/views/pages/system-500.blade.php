@extends('layouts.site')
@section('title', '500 | '.$theme['brand']['property_name'])
@section('meta_description', 'Temporary technical issue.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Something Went Wrong</h1><p>We are working to restore service quickly.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><a class="cta" href="{{ route('home', ['brand' => $brandKey]) }}">Return Home</a></div></div></section>
@endsection
