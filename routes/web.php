<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (Blade + Tailwind CSS - SEO Friendly)
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome')->name('home');
Route::redirect('servicios', '/#servicios', 301)->name('servicios');
Route::redirect('nosotros', '/#nosotros', 301)->name('nosotros');
Route::redirect('contacto', '/#contacto', 301)->name('contacto');

/*
|--------------------------------------------------------------------------
| Admin Routes (Inertia + React)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
