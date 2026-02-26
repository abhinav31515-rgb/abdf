<section class="section home-section location">
    <div class="container cards">
        <article class="offer-card">
            <h2>Prime Location</h2>
            <p>{{ $theme['brand']['address'] }}</p>
            <p>Close to key business districts, cultural landmarks, and airport corridors.</p>
            <a href="{{ route('site.contact', ['brand' => $brandKey]) }}">View Directions</a>
        </article>
        <article class="offer-card map-placeholder">
            <h3>Map Preview</h3>
            <p>Interactive map integration placeholder for route planning and local exploration.</p>
        </article>
    </div>
</section>
