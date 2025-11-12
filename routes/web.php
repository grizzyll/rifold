<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('pages.home.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about.about');
})->name('about');

// Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
// Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.detail');

Route::get('/mixandmatch', function () {
    return view('pages.mixandmatch.mixandmatch');
})->name('mixandmatch');

Route::get('/bestseller', function () {
    return view('pages.home.bestseller');
})->name('bestseller');

Route::get('/admin', function () {
    return view('pages.admin.main');
})->name('admin');

Route::get('/katalog', function () {
    return view('pages.katalog.katalog');
})->name('katalog');