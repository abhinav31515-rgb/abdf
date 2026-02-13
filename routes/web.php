<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageManagementController;
use App\Http\Controllers\Admin\ThemeSettingsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('/theme-settings', ThemeSettingsController::class)->name('admin.theme-settings');
    Route::put('/theme-settings/{brand}', [ThemeSettingsController::class, 'update'])->name('admin.theme-settings.update');

    Route::get('/pages', [PageManagementController::class, 'index'])->name('admin.pages.index');
    Route::get('/pages/create', [PageManagementController::class, 'create'])->name('admin.pages.create');
    Route::post('/pages', [PageManagementController::class, 'store'])->name('admin.pages.store');
    Route::get('/pages/{id}/edit', [PageManagementController::class, 'edit'])->name('admin.pages.edit');
    Route::put('/pages/{id}', [PageManagementController::class, 'update'])->name('admin.pages.update');
    Route::delete('/pages/{id}', [PageManagementController::class, 'destroy'])->name('admin.pages.destroy');
});
