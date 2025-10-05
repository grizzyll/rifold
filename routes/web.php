<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/mixandmatch', function () {
    return view('mixandmatch');
})->name('mixandmatch');
