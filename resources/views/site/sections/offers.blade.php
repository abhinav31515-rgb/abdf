<section id="offers" class="section offers">
    <div class="container">
        <div class="section-head">
            <h2>Featured Offers</h2>
            <p>Seasonal packages inspired by city culture, wellness, and indulgent culinary journeys.</p>
        </div>
        <div class="cards">
            @foreach ($theme['offers'] as $offer)
                <article class="offer-card">
                    <span class="pill">{{ $offer['tag'] }}</span>
                    <h3>{{ $offer['title'] }}</h3>
                    <p>{{ $offer['description'] }}</p>
                    <a href="#">View Details</a>
                </article>
            @endforeach
        </div>
    </div>
</section>
