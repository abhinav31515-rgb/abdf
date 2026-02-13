@extends('layouts.admin')

@section('title', 'Theme Settings')
@section('header', 'Theme & UX Customization')

@section('content')
<div class="panel mb-3">
    <h2>Header & Menu Configuration</h2>
    <div class="form-grid">
        <div>
            <label>Brand Code</label>
            <input type="text" value="{{ $theme['brand']['code'] }}">
        </div>
        <div>
            <label>Brand Name</label>
            <input type="text" value="{{ $theme['brand']['name'] }}">
        </div>
        <div>
            <label>Header Style</label>
            <input type="text" value="{{ $theme['appearance']['header_style'] }}">
        </div>
        <div>
            <label>Hero Overlay</label>
            <input type="text" value="{{ $theme['appearance']['hero_overlay'] }}">
        </div>
    </div>

    <h3 class="mt-3">Menu Items</h3>
    <table>
        <thead><tr><th>Label</th><th>Target</th></tr></thead>
        <tbody>
        @foreach($theme['menus'] as $menu)
            <tr><td>{{ $menu['label'] }}</td><td>{{ $menu['anchor'] }}</td></tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="panel mb-3">
    <h2>Brand Appearance Tokens</h2>
    <div class="form-grid">
        <div><label>Primary</label><input type="text" value="{{ $theme['appearance']['primary'] }}"></div>
        <div><label>Secondary</label><input type="text" value="{{ $theme['appearance']['secondary'] }}"></div>
        <div><label>Surface</label><input type="text" value="{{ $theme['appearance']['surface'] }}"></div>
    </div>
</div>

<div class="panel">
    <h2>Section Modules</h2>
    <p class="mb-2">Available modular views currently wired for this brand:</p>
    <ul class="mb-0">
        <li>Hero</li>
        <li>Rooms & Suites</li>
        <li>Offers</li>
        <li>Dining</li>
        <li>Feature Highlights</li>
        <li>Wellness</li>
        <li>Booking CTA</li>
    </ul>
</div>
@endsection
