<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpsertPageRequest;
use App\Support\BrandThemeRepository;
use App\Support\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PageManagementController extends Controller
{
    public function index(PageRepository $pages, BrandThemeRepository $themes): View
    {
        $brandKey = request()->query('brand', 'eros');

        return view('admin.pages.index', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'pages' => $pages->all($brandKey),
        ]);
    }

    public function create(BrandThemeRepository $themes): View
    {
        $brandKey = request()->query('brand', 'eros');

        return view('admin.pages.edit', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'page' => null,
            'isCreate' => true,
        ]);
    }

    public function store(UpsertPageRequest $request, PageRepository $pages): RedirectResponse
    {
        $brandKey = (string) $request->query('brand', 'eros');
        $pages->create($brandKey, $request->validated());

        return redirect()->route('admin.pages.index', ['brand' => $brandKey])->with('status', 'Page created.');
    }

    public function edit(string $id, PageRepository $pages, BrandThemeRepository $themes): View
    {
        $brandKey = request()->query('brand', 'eros');

        return view('admin.pages.edit', [
            'brandKey' => $brandKey,
            'brandList' => $themes->allBrands(),
            'page' => $pages->find($brandKey, $id),
            'isCreate' => false,
        ]);
    }

    public function update(string $id, UpsertPageRequest $request, PageRepository $pages): RedirectResponse
    {
        $brandKey = (string) $request->query('brand', 'eros');
        $pages->update($brandKey, $id, $request->validated());

        return redirect()->route('admin.pages.index', ['brand' => $brandKey])->with('status', 'Page updated.');
    }

    public function destroy(string $id, PageRepository $pages): RedirectResponse
    {
        $brandKey = (string) request()->query('brand', 'eros');
        $pages->delete($brandKey, $id);

        return redirect()->route('admin.pages.index', ['brand' => $brandKey])->with('status', 'Page deleted.');
    }
}
