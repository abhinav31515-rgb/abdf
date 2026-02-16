<?php

namespace App\Http\Controllers;

use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(BrandThemeRepository $themes): View
    {
        $theme = $themes->get(request()->query('brand', 'eros'));

        return view('home', [
            'theme' => $theme,
            'brandKey' => request()->query('brand', 'eros'),
        ]);
    }
}
