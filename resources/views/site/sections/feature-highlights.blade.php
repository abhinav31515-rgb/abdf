<section id="gallery" class="section highlights">
    <div class="container">
        <div class="section-head">
            <h2>Signature Experience Highlights</h2>
        </div>
        <div class="cards">
            @foreach ($theme['features'] as $feature)
                <article class="offer-card">
                    <h3>{{ $feature['title'] }}</h3>
                    <p>{{ $feature['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
