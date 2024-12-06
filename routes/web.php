<?php

use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'index')->name('home');
Route::view('/pricing', 'pricing')->name('home.pricing');
Route::view('/about', 'about')->name('home.about');