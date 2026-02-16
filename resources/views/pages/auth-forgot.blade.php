@extends('layouts.site')
@section('title', 'Forgot Password | '.$theme['brand']['property_name'])
@section('meta_description', 'Reset account password securely via verification flow.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Forgot Password</h1><p>Reset your password with a secure email verification flow.</p></div></section>
<section class="section page-section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Password Reset</h3>
            <form class="form-grid" action="#" method="post">
                <label>Registered Email<input type="email" placeholder="you@example.com"></label>
                <label>Booking Reference (Optional)<input type="text" placeholder="ABC12345"></label>
                <a class="cta" href="#">Send Reset Link</a>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Need Immediate Help?</h3>
            <p>Contact reservations for urgent booking access support.</p>
            <p><strong>{{ $theme['brand']['phone'] }}</strong></p>
        </aside>
    </div>
</section>
@endsection
