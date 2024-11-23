<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-home.index');

Route::view('/pricing', 'landing-home.pricing');

Route::view('/about', 'landing-home.about');

Route::view('/platform', 'platform.index')->name('platform-index');

Route::resource('/platform/students', StudentController::class);