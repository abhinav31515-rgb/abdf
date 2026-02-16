@extends('layouts.site')
@section('title', 'Profile | '.$theme['brand']['property_name'])
@section('meta_description', 'Manage personal profile, stay preferences, and communication settings.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Profile Dashboard</h1><p>Manage personal details, communication settings, and stay preferences.</p></div></section>
<section class="section"><div class="container detail-grid"><article class="offer-card"><table class="info-table"><tr><th>Name</th><td>Alex Morgan</td></tr><tr><th>Email</th><td>alex@example.com</td></tr><tr><th>Phone</th><td>+91 98765 43210</td></tr></table></article><aside class="offer-card tone-soft"><h3>Quick Actions</h3><ul class="stack-list"><li>Update profile</li><li>Manage preferences</li><li>View upcoming stay</li></ul></aside></div></section>
@endsection
