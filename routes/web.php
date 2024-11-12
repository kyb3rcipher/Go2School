<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::view('/pricing', 'pricing');

Route::view('/about', 'about');

Route::view('/platform', 'platform');