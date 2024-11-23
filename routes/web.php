<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::view('/pricing', 'pricing');

Route::view('/about', 'about');

Route::view('/platform', 'platform.index');
Route::get('/platform/students', StudentController::class);