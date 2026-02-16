@extends('layouts.site')
@section('title', 'Gallery | '.$theme['brand']['property_name'])
@section('meta_description', 'Browse curated visuals across rooms, dining, and experiences.')
@section('content')
<section class="sub-hero"><div class="container"><h1>Gallery</h1><p>Curated photo journeys across stay, dining, and events.</p></div></section>
<section class="section"><div class="container">
    <div class="filters-bar"><span class="chip">All</span><span class="chip">Rooms</span><span class="chip">Dining</span><span class="chip">Wellness</span><span class="chip">Events</span></div>
    <div class="gallery-grid"><div class="gallery-item">Lobby</div><div class="gallery-item">Suite</div><div class="gallery-item">Restaurant</div><div class="gallery-item">Spa</div><div class="gallery-item">Ballroom</div><div class="gallery-item">Terrace</div><div class="gallery-item">Pool</div><div class="gallery-item">City View</div></div>
</div></section>
@endsection
