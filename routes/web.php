<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
})->name('home');


Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::get('/sign-up', 'signup')->name('signup');
        Route::post('/register', 'register')->name('register');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
    });
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware('auth')->prefix('dashboard/catalogs')->controller(CatalogController::class)->group(function () {
    Route::get('/', 'index')->name('catalogs.index');
    Route::get('/create', 'create')->name('catalogs.create');
    Route::post('/store', 'store')->name('catalogs.store');
    Route::get('/{catalog}/edit', 'edit')->name('catalogs.edit');
    Route::put('/{catalog}', 'update')->name('catalogs.update');
    Route::delete('/{catalog}', 'destroy')->name('catalogs.destroy');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
