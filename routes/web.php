<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlatformAdmin\StudentController;

// Home
Route::view('/', 'index')->name('home');
Route::view('/pricing', 'pricing')->name('home.pricing');
Route::view('/about', 'about')->name('home.about');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Platform Admin
Route::view('/platform', 'platform-admin.index')->name('platform-admin.index');
Route::resource('/platform/students', StudentController::class)->except(['show']);
