<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');
});
