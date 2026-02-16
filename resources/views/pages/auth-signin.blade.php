@extends('layouts.site')
@section('title', 'Sign In | '.$theme['brand']['property_name'])
@section('meta_description', 'Sign in to manage bookings, profile details, and preferences.')
@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Sign In</h1><p>Access your booking history, preferences, and loyalty benefits.</p></div></section>
<section class="section page-section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Member Sign In</h3>
            <form class="form-grid" action="#" method="post">
                <label>Email Address<input type="email" placeholder="you@example.com"></label>
                <label>Password<input type="password" placeholder="••••••••"></label>
                <label class="inline-check"><input type="checkbox"> Keep me signed in on this device</label>
                <div class="action-row">
                    <a class="cta" href="{{ route('site.account.profile', ['brand' => $brandKey]) }}">Continue</a>
                    <a href="{{ route('site.account.forgot', ['brand' => $brandKey]) }}">Forgot password?</a>
                </div>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Member Benefits</h3>
            <ul class="stack-list">
                <li>Exclusive member-only direct rates.</li>
                <li>Faster booking with saved guest details.</li>
                <li>Tier-based perks: upgrades and late checkout.</li>
            </ul>
            <a class="mini-cta" href="{{ route('site.account.signup', ['brand' => $brandKey]) }}">Create an Account</a>
        </aside>
    </div>
</section>
@endsection
