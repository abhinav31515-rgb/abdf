@extends('layouts.site')
@section('title', 'Confirmation | '.$theme['brand']['property_name'])
@section('meta_description', 'Booking confirmation with itinerary and post-booking actions.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Booking Confirmed</h1><p>Your reservation is secured and confirmation has been emailed.</p></div></section>
<section class="section"><div class="container detail-grid">
    <article class="offer-card"><p class="kicker">Reservation Code</p><h3>EROS-829154</h3><table class="info-table"><tr><th>Stay</th><td>12 Aug – 14 Aug</td></tr><tr><th>Guest</th><td>Alex Morgan</td></tr><tr><th>Room</th><td>Deluxe Room</td></tr><tr><th>Total Paid</th><td>INR 48,600</td></tr></table></article>
    <aside class="offer-card tone-soft"><h3>Next Steps</h3><ul class="stack-list"><li>Add arrival time and transfer details.</li><li>Download invoice.</li><li>Manage or modify booking anytime.</li></ul><a class="mini-cta" href="{{ route('site.booking.manage', ['brand' => $brandKey]) }}">Manage Booking</a></aside>
</div></section>
@endsection
