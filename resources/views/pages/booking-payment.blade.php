@extends('layouts.site')
@section('title', 'Payment | '.$theme['brand']['property_name'])
@section('meta_description', 'Secure payment step to complete your reservation.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Payment</h1><p>Securely complete payment to confirm reservation.</p></div></section>
<section class="section"><div class="container"><div class="offer-card"><h3>Secure Payment</h3><p>Card/payment gateway component placeholder with compliance messaging.</p><a class="cta" href="{{ route('site.booking.confirmation', ['brand' => $brandKey]) }}">Pay & Confirm</a></div></div></section>
@endsection
