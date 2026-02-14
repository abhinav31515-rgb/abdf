<?php

namespace App\Http\Controllers;

use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class SitePagesController extends Controller
{
    public function rooms(BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);

        return view('pages.rooms', compact('brandKey', 'theme'));
    }

    public function roomDetail(string $slug, BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);
        $room = collect($theme['rooms'])->first(fn (array $item): bool => Str::slug($item['name']) === $slug) ?? $theme['rooms'][0];

        return view('pages.room-detail', compact('brandKey', 'theme', 'room'));
    }

    public function offers(BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);

        return view('pages.offers', compact('brandKey', 'theme'));
    }

    public function offerDetail(string $slug, BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);
        $offer = collect($theme['offers'])->first(fn (array $item): bool => Str::slug($item['title']) === $slug) ?? $theme['offers'][0];

        return view('pages.offer-detail', compact('brandKey', 'theme', 'offer'));
    }

    public function dining(BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);

        return view('pages.dining', compact('brandKey', 'theme'));
    }

    public function diningDetail(string $slug, BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);
        $restaurant = collect($theme['dining'])->first(fn (array $item): bool => Str::slug($item['name']) === $slug) ?? $theme['dining'][0];

        return view('pages.dining-detail', compact('brandKey', 'theme', 'restaurant'));
    }

    public function gallery(BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);

        return view('pages.gallery', compact('brandKey', 'theme'));
    }

    public function contact(BrandThemeRepository $themes): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);

        return view('pages.contact', compact('brandKey', 'theme'));
    }

    private function resolveTheme(BrandThemeRepository $themes): array
    {
        $brandKey = request()->query('brand', 'eros');

        return [$brandKey, $themes->get($brandKey)];
    }
}
