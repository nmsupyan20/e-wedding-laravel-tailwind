<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})->name('home');


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::get('/sign-up', 'signup')->name('signup');
    Route::post('/register', 'register')->name('register');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});


Route::prefix('dashboard')->controller(CatalogController::class)->group(function () {
    Route::get('/catalogs', 'index')->name('catalogs.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.reports.index');
})->name('dashboard');
