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
        return $this->page($themes, 'pages.gallery');
    }

    public function contact(BrandThemeRepository $themes): View
    {
        return $this->page($themes, 'pages.contact');
    }

    public function wellness(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.wellness'); }
    public function meetings(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.meetings-events'); }
    public function weddings(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.weddings'); }
    public function experiences(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.experiences'); }
    public function about(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.about'); }
    public function faq(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.faq'); }
    public function sustainability(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.sustainability'); }
    public function press(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.press'); }
    public function careers(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.careers'); }
    public function legal(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.legal'); }

    public function bookingSearch(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-search'); }
    public function bookingAvailability(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-availability'); }

    public function bookingAddons(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-addons'); }
    public function bookingGuestDetails(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-guest-details'); }
    public function bookingPayment(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-payment'); }
    public function bookingCheckout(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-checkout'); }
    public function bookingConfirmation(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-confirmation'); }
    public function bookingManage(BrandThemeRepository $themes): View { return $this->page($themes, 'pages.booking-manage'); }

    public function signIn(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/auth-signin'); }
    public function signUp(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/auth-signup'); }
    public function forgotPassword(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/auth-forgot'); }
    public function profile(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/account-profile'); }
    public function loyalty(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/account-loyalty'); }

    public function system404(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/system-404'); }
    public function system500(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/system-500'); }
    public function maintenance(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/system-maintenance'); }
    public function searchResults(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/system-search-results'); }
    public function sitemap(BrandThemeRepository $themes): View { return $this->page($themes, 'pages/system-sitemap'); }

    private function page(BrandThemeRepository $themes, string $view): View
    {
        [$brandKey, $theme] = $this->resolveTheme($themes);
        return view($view, compact('brandKey', 'theme'));
    }

    private function resolveTheme(BrandThemeRepository $themes): array
    {
        $brandKey = request()->query('brand', 'eros');
        return [$brandKey, $themes->get($brandKey)];
    }
}
