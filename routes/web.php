<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// ── Home ──────────────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── About ─────────────────────────────────────────────────────────────────────
Route::get('/about', [AboutController::class, 'index'])->name('about');

// ── Services ──────────────────────────────────────────────────────────────────
Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
    Route::get('/',         'index')->name('index');
    Route::get('/{slug}',   'show')->name('show');
});

// ── Portfolio ─────────────────────────────────────────────────────────────────
Route::controller(PortfolioController::class)->prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/',         'index')->name('index');
    Route::get('/{slug}',   'show')->name('show');
});

// ── Contact ───────────────────────────────────────────────────────────────────
Route::controller(ContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('/',     'index')->name('index');
    Route::post('/',    'store')->name('store');
});

// ── Misc / placeholder pages ──────────────────────────────────────────────────
Route::view('/careers', 'pages.careers')->name('careers');
