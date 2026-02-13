<section class="hero">
    <div class="overlay">
        <div class="container hero-content">
            <p class="eyebrow">{{ $theme['hero']['eyebrow'] }}</p>
            <h1>{{ $theme['hero']['title'] }}</h1>
            <p class="lead">{{ $theme['hero']['subtitle'] }}</p>
            <div class="hero-actions">
                <a href="{{ $theme['hero']['primary_cta']['target'] }}" class="cta">{{ $theme['hero']['primary_cta']['label'] }}</a>
                <a href="{{ $theme['hero']['secondary_cta']['target'] }}" class="cta ghost">{{ $theme['hero']['secondary_cta']['label'] }}</a>
            </div>
        </div>
    </div>
</section>
