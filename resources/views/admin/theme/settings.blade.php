@extends('layouts.admin')

@section('title', 'Theme Settings')
@section('header', 'Theme & UX Customization')

@section('content')
@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<form method="post" action="{{ route('admin.theme-settings.update', ['brand' => $brandKey]) }}">
    @csrf
    @method('put')

    <div class="panel mb-3">
        <h2>Header & Brand Configuration</h2>
        <div class="form-grid">
            <div><label>Brand Code</label><input type="text" name="brand[code]" value="{{ old('brand.code', $theme['brand']['code']) }}"></div>
            <div><label>Brand Name</label><input type="text" name="brand[name]" value="{{ old('brand.name', $theme['brand']['name']) }}"></div>
            <div><label>Property Name</label><input type="text" name="brand[property_name]" value="{{ old('brand.property_name', $theme['brand']['property_name']) }}"></div>
            <div><label>Phone</label><input type="text" name="brand[phone]" value="{{ old('brand.phone', $theme['brand']['phone']) }}"></div>
            <div class="full"><label>Address</label><input type="text" name="brand[address]" value="{{ old('brand.address', $theme['brand']['address']) }}"></div>
        </div>
    </div>

    <div class="panel mb-3">
        <h2>Appearance Tokens</h2>
        <div class="form-grid">
            <div><label>Primary</label><input type="text" name="appearance[primary]" value="{{ old('appearance.primary', $theme['appearance']['primary']) }}"></div>
            <div><label>Secondary</label><input type="text" name="appearance[secondary]" value="{{ old('appearance.secondary', $theme['appearance']['secondary']) }}"></div>
            <div><label>Surface</label><input type="text" name="appearance[surface]" value="{{ old('appearance.surface', $theme['appearance']['surface']) }}"></div>
            <div><label>Header Style</label><input type="text" name="appearance[header_style]" value="{{ old('appearance.header_style', $theme['appearance']['header_style']) }}"></div>
            <div><label>Hero Overlay</label><input type="text" name="appearance[hero_overlay]" value="{{ old('appearance.hero_overlay', $theme['appearance']['hero_overlay']) }}"></div>
        </div>
    </div>

    <div class="panel mb-3">
        <h2>Hero Section Copy</h2>
        <div class="form-grid">
            <div><label>Eyebrow</label><input type="text" name="hero[eyebrow]" value="{{ old('hero.eyebrow', $theme['hero']['eyebrow']) }}"></div>
            <div><label>Title</label><input type="text" name="hero[title]" value="{{ old('hero.title', $theme['hero']['title']) }}"></div>
            <div class="full"><label>Subtitle</label><input type="text" name="hero[subtitle]" value="{{ old('hero.subtitle', $theme['hero']['subtitle']) }}"></div>
            <div><label>Primary CTA Label</label><input type="text" name="hero[primary_cta][label]" value="{{ old('hero.primary_cta.label', $theme['hero']['primary_cta']['label']) }}"></div>
            <div><label>Primary CTA Target</label><input type="text" name="hero[primary_cta][target]" value="{{ old('hero.primary_cta.target', $theme['hero']['primary_cta']['target']) }}"></div>
            <div><label>Secondary CTA Label</label><input type="text" name="hero[secondary_cta][label]" value="{{ old('hero.secondary_cta.label', $theme['hero']['secondary_cta']['label']) }}"></div>
            <div><label>Secondary CTA Target</label><input type="text" name="hero[secondary_cta][target]" value="{{ old('hero.secondary_cta.target', $theme['hero']['secondary_cta']['target']) }}"></div>
        </div>
    </div>

    <div class="panel mb-3">
        <h2>Header Menus</h2>
        <div class="menu-grid">
            @foreach($theme['menus'] as $idx => $menu)
                <div class="menu-row">
                    <input type="text" name="menus[{{ $idx }}][label]" value="{{ old("menus.$idx.label", $menu['label']) }}">
                    <input type="text" name="menus[{{ $idx }}][anchor]" value="{{ old("menus.$idx.anchor", $menu['anchor']) }}">
                </div>
            @endforeach
        </div>
    </div>

    <button class="btn btn-primary">Save Theme Settings</button>
</form>
@endsection
