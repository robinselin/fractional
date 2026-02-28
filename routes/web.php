<?php

use App\Http\Controllers\QualifierController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/og-image', 'og-image')->name('og-image');
Route::post('/qualifier', [QualifierController::class, 'store'])->name('qualifier.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
