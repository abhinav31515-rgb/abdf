@extends('layouts.site')
@section('title', 'Booking Search | '.$theme['brand']['property_name'])
@section('meta_description', 'Start your booking by selecting dates, guests, and room preferences.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Start Your Booking</h1><p>Select travel details to view live rates and room availability.</p></div></section>
<section class="section page-section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Stay Details</h3>
            <form class="form-grid" action="#" method="get">
                <label>Check-in<input type="date"></label>
                <label>Check-out<input type="date"></label>
                <label>Adults<select><option>2 Adults</option><option>1 Adult</option><option>3 Adults</option></select></label>
                <label>Children<select><option>0 Children</option><option>1 Child</option><option>2 Children</option></select></label>
                <label>Promo Code<input type="text" placeholder="Optional"></label>
                <a class="cta" href="{{ route('site.booking.availability', ['brand' => $brandKey]) }}">Check Availability</a>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Booking Promise</h3>
            <ul class="stack-list">
                <li>Best available direct rate guarantee.</li>
                <li>Flexible cancellation on eligible plans.</li>
                <li>Instant reservation confirmation.</li>
            </ul>
        </aside>
    </div>
</section>
@endsection
