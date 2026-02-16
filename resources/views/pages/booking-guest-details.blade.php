@extends('layouts.site')
@section('title', 'Guest Details | '.$theme['brand']['property_name'])
@section('meta_description', 'Enter guest information and requests before payment.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Guest Details</h1><p>Share traveler details and preferences for a seamless arrival.</p></div></section>
<section class="section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Primary Guest Information</h3>
            <form class="form-grid" action="#" method="post">
                <label>First Name<input type="text" placeholder="First name"></label>
                <label>Last Name<input type="text" placeholder="Last name"></label>
                <label>Email<input type="email" placeholder="you@example.com"></label>
                <label>Phone<input type="tel" placeholder="+91"></label>
                <label>Arrival Time<select><option>After 2:00 PM</option><option>After 4:00 PM</option><option>After 8:00 PM</option></select></label>
                <label>Special Requests<textarea rows="4" placeholder="Allergies, accessibility, celebration notes..."></textarea></label>
                <a class="cta" href="{{ route('site.booking.payment', ['brand' => $brandKey]) }}">Continue to Payment</a>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Reservation Summary</h3>
            <ul class="stack-list">
                <li>2 Nights · Deluxe Room</li>
                <li>Breakfast Included</li>
                <li>Free Cancellation until 48h prior</li>
            </ul>
        </aside>
    </div>
</section>
@endsection
