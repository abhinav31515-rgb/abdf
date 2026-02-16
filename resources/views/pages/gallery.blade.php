@extends('layouts.site')

@section('title', 'Gallery | '.$theme['brand']['property_name'])
@section('meta_description', 'Browse the hotel gallery across rooms, dining, wellness, and events.')

@section('content')
<section class="sub-hero page-hero"><div class="container"><h1>Gallery</h1><p>Visual highlights of rooms, cuisine, wellness, and events.</p></div></section>
<section class="section page-section"><div class="container gallery-grid">@for($i=1;$i<=8;$i++)<div class="gallery-item">Gallery Image {{ $i }}</div>@endfor</div></section>
@endsection
