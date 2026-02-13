<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('home', [
            'offers' => [
                [
                    'title' => 'Signature Staycation',
                    'description' => 'Luxury suites, breakfast for two, and evening high tea in a serene setting.',
                    'tag' => 'Best Seller',
                ],
                [
                    'title' => 'Wellness Escape',
                    'description' => 'Daily yoga, spa therapies, and curated nutrition menus for complete balance.',
                    'tag' => 'Spa',
                ],
                [
                    'title' => 'Delhi Discovery',
                    'description' => 'Private guided city tour paired with fine dining and premium airport transfers.',
                    'tag' => 'City Tour',
                ],
            ],
            'rooms' => [
                ['name' => 'Deluxe Room', 'size' => '42 sqm', 'view' => 'City view', 'price' => 'From ₹18,000'],
                ['name' => 'Horizon Club Room', 'size' => '52 sqm', 'view' => 'Skyline view', 'price' => 'From ₹24,000'],
                ['name' => 'Executive Suite', 'size' => '76 sqm', 'view' => 'Panoramic view', 'price' => 'From ₹38,000'],
            ],
            'dining' => [
                ['name' => 'Sorrento', 'type' => 'Italian Fine Dining'],
                ['name' => 'Tamra', 'type' => 'Global Interactive Kitchen'],
                ['name' => 'Grappa', 'type' => 'Cocktail & Lounge Bar'],
            ],
        ]);
    }
}
