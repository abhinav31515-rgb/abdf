<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateThemeSettingsRequest;
use App\Support\BrandThemeRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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

    public function update(UpdateThemeSettingsRequest $request, BrandThemeRepository $themes): RedirectResponse
    {
        $brandKey = (string) $request->route('brand');
        $existing = $themes->get($brandKey);

        $payload = [
            'brand' => $request->validated('brand'),
            'appearance' => $request->validated('appearance'),
            'menus' => $request->validated('menus'),
            'hero' => $request->validated('hero'),
            'rooms' => $existing['rooms'] ?? [],
            'offers' => $existing['offers'] ?? [],
            'dining' => $existing['dining'] ?? [],
            'features' => $existing['features'] ?? [],
        ];

        $themes->update($brandKey, $payload);

        return redirect()
            ->route('admin.theme-settings', ['brand' => $brandKey])
            ->with('status', 'Theme settings saved successfully.');
    }
}
