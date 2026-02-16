@extends('layouts.site')
@section('title', 'Checkout | '.$theme['brand']['property_name'])
@section('meta_description', 'Complete guest details and payment to confirm your reservation.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Checkout</h1><p>Final review before we issue your confirmed itinerary.</p></div></section>
<section class="section page-section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Booking Review</h3>
            <ul class="stack-list">
                <li><strong>Stay:</strong> 12 Aug – 14 Aug · 2 Guests</li>
                <li><strong>Room:</strong> Deluxe Room with breakfast</li>
                <li><strong>Add-ons:</strong> Airport Transfer</li>
                <li><strong>Guest:</strong> Alex Morgan · alex@example.com</li>
                <li><strong>Payment:</strong> Visa ending 3456</li>
            </ul>
            <div class="action-row">
                <a class="cta" href="{{ route('site.booking.confirmation', ['brand' => $brandKey]) }}">Complete Booking</a>
                <a href="{{ route('site.booking.guest-details', ['brand' => $brandKey]) }}">Edit Guest Details</a>
            </div>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Cancellation Policy</h3>
            <p>Free cancellation up to 48 hours before arrival. One night charge applies after that window.</p>
            <p><strong>Estimated Total: INR 48,600</strong></p>
        </aside>
    </div>
</section>
@endsection
