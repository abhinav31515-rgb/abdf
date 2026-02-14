<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function __invoke(BrandThemeRepository $themes): View
    {
        $brandKey = request()->query('brand', 'eros');
        $theme = $themes->get($brandKey);

        return view('admin.dashboard', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'theme' => $theme,
            'stats' => [
                'today_bookings' => 31,
                'active_offers' => count($theme['offers']),
                'occupancy' => '87%',
                'average_rating' => 4.9,
            ],
            'recentEnquiries' => [
                ['guest' => 'A. Verma', 'request' => 'Airport transfer', 'channel' => 'Website', 'status' => 'Open'],
                ['guest' => 'L. Martin', 'request' => 'Suite upgrade', 'channel' => 'Concierge', 'status' => 'In Progress'],
                ['guest' => 'N. Kapoor', 'request' => 'Spa reservation', 'channel' => 'App', 'status' => 'Completed'],
                ['guest' => 'M. Khan', 'request' => 'Late checkout', 'channel' => 'Front Desk', 'status' => 'Open'],
            ],
            'occupancyTrend' => [72, 75, 79, 81, 84, 86, 87],
            'revenueTrend' => [4.2, 4.6, 4.8, 5.1, 5.4, 5.9, 6.3],
        ]);
    }
}
