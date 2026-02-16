@extends('layouts.site')
@section('title', 'Payment | '.$theme['brand']['property_name'])
@section('meta_description', 'Secure payment step to complete your reservation.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Payment</h1><p>Securely complete payment to confirm your reservation.</p></div></section>
<section class="section page-section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Card Details</h3>
            <form class="form-grid" action="#" method="post">
                <label>Name on Card<input type="text" placeholder="Card holder name"></label>
                <label>Card Number<input type="text" placeholder="1234 5678 9012 3456"></label>
                <div class="split-field">
                    <label>Expiry<input type="text" placeholder="MM/YY"></label>
                    <label>CVV<input type="password" placeholder="***"></label>
                </div>
                <label>Billing Address<input type="text" placeholder="Street, city, postal code"></label>
                <label class="inline-check"><input type="checkbox"> I authorize this payment and accept cancellation terms.</label>
                <a class="cta" href="{{ route('site.booking.checkout', ['brand' => $brandKey]) }}">Review Booking</a>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Secure Checkout</h3>
            <p>Payments are encrypted and processed through PCI-compliant gateways.</p>
            <p><strong>Total: INR 48,600</strong></p>
        </aside>
    </div>
</section>
@endsection
