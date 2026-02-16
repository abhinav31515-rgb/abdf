<?php

use App\Http\Controllers\Admin\AdminModuleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageManagementController;
use App\Http\Controllers\Admin\ThemeSettingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitePagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/rooms', [SitePagesController::class, 'rooms'])->name('site.rooms');
Route::get('/rooms/{slug}', [SitePagesController::class, 'roomDetail'])->name('site.rooms.detail');
Route::get('/offers', [SitePagesController::class, 'offers'])->name('site.offers');
Route::get('/offers/{slug}', [SitePagesController::class, 'offerDetail'])->name('site.offers.detail');
Route::get('/dining', [SitePagesController::class, 'dining'])->name('site.dining');
Route::get('/dining/{slug}', [SitePagesController::class, 'diningDetail'])->name('site.dining.detail');
Route::get('/wellness', [SitePagesController::class, 'wellness'])->name('site.wellness');
Route::get('/meetings-events', [SitePagesController::class, 'meetings'])->name('site.meetings');
Route::get('/weddings', [SitePagesController::class, 'weddings'])->name('site.weddings');
Route::get('/experiences', [SitePagesController::class, 'experiences'])->name('site.experiences');
Route::get('/about', [SitePagesController::class, 'about'])->name('site.about');
Route::get('/faq', [SitePagesController::class, 'faq'])->name('site.faq');
Route::get('/sustainability', [SitePagesController::class, 'sustainability'])->name('site.sustainability');
Route::get('/press', [SitePagesController::class, 'press'])->name('site.press');
Route::get('/careers', [SitePagesController::class, 'careers'])->name('site.careers');
Route::get('/legal', [SitePagesController::class, 'legal'])->name('site.legal');
Route::get('/gallery', [SitePagesController::class, 'gallery'])->name('site.gallery');
Route::get('/contact', [SitePagesController::class, 'contact'])->name('site.contact');

Route::prefix('booking')->group(function (): void {
    Route::get('/search', [SitePagesController::class, 'bookingSearch'])->name('site.booking.search');
    Route::get('/availability', [SitePagesController::class, 'bookingAvailability'])->name('site.booking.availability');
    Route::get('/addons', [SitePagesController::class, 'bookingAddons'])->name('site.booking.addons');
    Route::get('/guest-details', [SitePagesController::class, 'bookingGuestDetails'])->name('site.booking.guest-details');
    Route::get('/payment', [SitePagesController::class, 'bookingPayment'])->name('site.booking.payment');
    Route::get('/checkout', [SitePagesController::class, 'bookingCheckout'])->name('site.booking.checkout');
    Route::get('/confirmation', [SitePagesController::class, 'bookingConfirmation'])->name('site.booking.confirmation');
    Route::get('/manage', [SitePagesController::class, 'bookingManage'])->name('site.booking.manage');
});

Route::prefix('account')->group(function (): void {
    Route::get('/signin', [SitePagesController::class, 'signIn'])->name('site.account.signin');
    Route::get('/signup', [SitePagesController::class, 'signUp'])->name('site.account.signup');
    Route::get('/forgot-password', [SitePagesController::class, 'forgotPassword'])->name('site.account.forgot');
    Route::get('/profile', [SitePagesController::class, 'profile'])->name('site.account.profile');
    Route::get('/loyalty', [SitePagesController::class, 'loyalty'])->name('site.account.loyalty');
});

Route::prefix('system')->group(function (): void {
    Route::get('/404', [SitePagesController::class, 'system404'])->name('site.system.404');
    Route::get('/500', [SitePagesController::class, 'system500'])->name('site.system.500');
    Route::get('/maintenance', [SitePagesController::class, 'maintenance'])->name('site.system.maintenance');
    Route::get('/search-results', [SitePagesController::class, 'searchResults'])->name('site.system.search');
    Route::get('/sitemap', [SitePagesController::class, 'sitemap'])->name('site.system.sitemap');
});

Route::prefix('admin')->middleware(['auth'])->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('/theme-settings', ThemeSettingsController::class)->name('admin.theme-settings');
    Route::put('/theme-settings/{brand}', [ThemeSettingsController::class, 'update'])->name('admin.theme-settings.update');

    Route::get('/pages', [PageManagementController::class, 'index'])->name('admin.pages.index');
    Route::get('/pages/create', [PageManagementController::class, 'create'])->name('admin.pages.create');
    Route::post('/pages', [PageManagementController::class, 'store'])->name('admin.pages.store');
    Route::get('/pages/{id}/edit', [PageManagementController::class, 'edit'])->name('admin.pages.edit');
    Route::put('/pages/{id}', [PageManagementController::class, 'update'])->name('admin.pages.update');
    Route::post('/pages/{id}/clone', [PageManagementController::class, 'clone'])->name('admin.pages.clone');
    Route::delete('/pages/{id}', [PageManagementController::class, 'destroy'])->name('admin.pages.destroy');


    Route::get('/brand-overview', [AdminModuleController::class, 'show'])->defaults('module', 'brand-overview')->name('admin.brand-overview');
    Route::get('/brand-hierarchy', [AdminModuleController::class, 'show'])->defaults('module', 'brand-hierarchy')->name('admin.brand-hierarchy');
    Route::get('/section-builder', [AdminModuleController::class, 'show'])->defaults('module', 'section-builder')->name('admin.section-builder');
    Route::get('/menu-manager', [AdminModuleController::class, 'show'])->defaults('module', 'menu-manager')->name('admin.menu-manager');
    Route::get('/seo-manager', [AdminModuleController::class, 'show'])->defaults('module', 'seo-manager')->name('admin.seo-manager');
    Route::get('/seo-assistant', [AdminModuleController::class, 'show'])->defaults('module', 'seo-assistant')->name('admin.seo-assistant');
    Route::get('/redirect-manager', [AdminModuleController::class, 'show'])->defaults('module', 'redirect-manager')->name('admin.redirect-manager');
    Route::get('/media-library', [AdminModuleController::class, 'show'])->defaults('module', 'media-library')->name('admin.media-library');
    Route::get('/gallery-manager', [AdminModuleController::class, 'show'])->defaults('module', 'gallery-manager')->name('admin.gallery-manager');
    Route::get('/review-inbox', [AdminModuleController::class, 'show'])->defaults('module', 'review-inbox')->name('admin.review-inbox');
    Route::get('/moderation-rules', [AdminModuleController::class, 'show'])->defaults('module', 'moderation-rules')->name('admin.moderation-rules');
    Route::get('/response-center', [AdminModuleController::class, 'show'])->defaults('module', 'response-center')->name('admin.response-center');
    Route::get('/booking-center', [AdminModuleController::class, 'show'])->defaults('module', 'booking-center')->name('admin.booking-center');
    Route::get('/rates-inventory', [AdminModuleController::class, 'show'])->defaults('module', 'rates-inventory')->name('admin.rates-inventory');
    Route::get('/offers-packages', [AdminModuleController::class, 'show'])->defaults('module', 'offers-packages')->name('admin.offers-packages');
    Route::get('/ota-connectors', [AdminModuleController::class, 'show'])->defaults('module', 'ota-connectors')->name('admin.ota-connectors');
    Route::get('/pms-connectors', [AdminModuleController::class, 'show'])->defaults('module', 'pms-connectors')->name('admin.pms-connectors');
    Route::get('/sync-center', [AdminModuleController::class, 'show'])->defaults('module', 'sync-center')->name('admin.sync-center');
    Route::get('/reports-analytics', [AdminModuleController::class, 'show'])->defaults('module', 'reports-analytics')->name('admin.reports-analytics');
    Route::get('/users-roles', [AdminModuleController::class, 'show'])->defaults('module', 'users-roles')->name('admin.users-roles');
    Route::get('/system-support', [AdminModuleController::class, 'show'])->defaults('module', 'system-support')->name('admin.system-support');
});
