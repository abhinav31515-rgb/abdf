@extends('layouts.site')

@section('title', $theme['brand']['property_name'].' | Luxury Stay')

@section('content')
@include('site.sections.hero')
@include('site.sections.rooms')
@include('site.sections.offers')
@include('site.sections.dining')
@include('site.sections.feature-highlights')
@include('site.sections.wellness')
@include('site.sections.booking')
@endsection
