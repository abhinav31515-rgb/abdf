@extends('layouts.site')
@section('title', 'Manage Booking | '.$theme['brand']['property_name'])
@section('meta_description', 'Retrieve and manage existing bookings.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Manage Booking</h1><p>Retrieve your reservation to update details or review policy terms.</p></div></section>
<section class="section"><div class="container split-layout">
    <article class="offer-card"><h3>Find Your Booking</h3><form class="form-grid" action="#" method="post"><label>Booking Code<input type="text" placeholder="EROS-829154"></label><label>Email Address<input type="email" placeholder="you@example.com"></label><a class="cta" href="#">Retrieve Booking</a></form></article>
    <aside class="offer-card tone-soft"><h3>What You Can Do</h3><ul class="stack-list"><li>Update arrival details.</li><li>Add transfer and amenities.</li><li>View invoices and policy.</li></ul></aside>
</div></section>
@endsection
