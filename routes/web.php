<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (Blade + Tailwind CSS - SEO Friendly)
|--------------------------------------------------------------------------
*/
Route::view('/', 'welcome')->name('home');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::view('contacto', 'contacto')->name('contacto');

/*
|--------------------------------------------------------------------------
| Admin Routes (Inertia + React)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
