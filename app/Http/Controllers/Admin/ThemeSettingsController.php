<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;

class ThemeSettingsController extends Controller
{
    public function __invoke(BrandThemeRepository $themes): View
    {
        $brandKey = request()->query('brand', 'eros');

        return view('admin.theme.settings', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'theme' => $themes->get($brandKey),
        ]);
    }
}
