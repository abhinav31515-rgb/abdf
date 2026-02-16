@extends('layouts.site')
@section('title', '404 | '.$theme['brand']['property_name'])
@section('meta_description', 'Requested page was not found.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Page Not Found</h1><p>We could not find the requested page.</p></div></section>
<section class="section page-section"><div class="container"><div class="offer-card"><a class="cta" href="{{ route('home', ['brand' => $brandKey]) }}">Go to Home</a></div></div></section>
@endsection
