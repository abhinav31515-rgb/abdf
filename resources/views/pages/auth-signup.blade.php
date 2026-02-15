@extends('layouts.site')
@section('title', 'Join | '.$theme['brand']['property_name'])
@section('meta_description', 'Create your account to unlock member-only benefits and rates.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Create Account</h1><p>Join our membership program to personalize every stay.</p></div></section>
<section class="section">
    <div class="container split-layout">
        <div class="offer-card">
            <h3>Membership Registration</h3>
            <form class="form-grid" action="#" method="post">
                <label>First Name<input type="text" placeholder="First name"></label>
                <label>Last Name<input type="text" placeholder="Last name"></label>
                <label>Email<input type="email" placeholder="you@example.com"></label>
                <label>Mobile<input type="tel" placeholder="+91"></label>
                <label>Password<input type="password" placeholder="Create a password"></label>
                <label class="inline-check"><input type="checkbox"> I agree to Terms, Privacy Policy, and member communications.</label>
                <a class="cta" href="{{ route('site.account.profile', ['brand' => $brandKey]) }}">Create Account</a>
            </form>
        </div>
        <aside class="offer-card tone-soft">
            <h3>Included from Day One</h3>
            <ul class="stack-list">
                <li>Member rates across participating properties.</li>
                <li>Priority access to curated seasonal offers.</li>
                <li>Saved preferences for room and amenities.</li>
            </ul>
        </aside>
    </div>
</section>
@endsection
