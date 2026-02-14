<section id="dining" class="section dining">
    <div class="container">
        <div class="section-head">
            <h2>Dining Destinations</h2>
            <p>Distinct restaurants and lounges inspired by the sophistication of New Delhi luxury hospitality.</p>
        </div>
        <div class="cards">
            @foreach ($theme['dining'] as $restaurant)
                <article class="offer-card dining-card">
                    <h3>{{ $restaurant['name'] }}</h3>
                    <p>{{ $restaurant['type'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
