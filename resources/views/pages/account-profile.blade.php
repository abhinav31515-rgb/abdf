@extends('layouts.site')
@section('title', 'Profile | '.$theme['brand']['property_name'])
@section('meta_description', 'Manage personal profile, stay preferences, and communication settings.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Profile Dashboard</h1><p>Manage personal details and stay preferences.</p></div></section>
<section class="section page-section"><div class="container cards"><article class="offer-card"><h3>Profile Information</h3><p>Personal and contact details management.</p></article><article class="offer-card"><h3>Preferences</h3><p>Room, dining, and special request preferences.</p></article><article class="offer-card"><h3>Communication</h3><p>Subscription and notification settings.</p></article></div></section>
@endsection
