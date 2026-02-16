<section id="stay" class="section intro">
    <div class="container">
        <div class="section-head">
            <h2>Rooms & Suites</h2>
            <p>Crafted for business and leisure travelers with understated luxury and panoramic city perspectives.</p>
        </div>
        <div class="cards rooms-grid">
            @foreach ($theme['rooms'] as $room)
                <article class="offer-card room-card">
                    <h3>{{ $room['name'] }}</h3>
                    <p>{{ $room['size'] }} · {{ $room['view'] }}</p>
                    <strong>{{ $room['price'] }}</strong>
                    <p><a href="{{ route('site.rooms.detail', ['slug' => Illuminate\Support\Str::slug($room['name']), 'brand' => $brandKey]) }}">View Details</a></p>
                </article>
            @endforeach
        </div>
    </div>
</section>
