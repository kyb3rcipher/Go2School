<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-home.index');

Route::view('/pricing', 'landing-home.pricing');

Route::view('/about', 'landing-home.about');

Route::view('/platform', 'platform.index')->name('platform-index');

Route::resource('/platform/students', StudentController::class)->except(['show']);
Route::get('/platform/students/list', [StudentController::class, 'list'])->name('students.list');
Route::get('/platform/students/list/view/{id}', [StudentController::class, 'view'])->name('students.view');

// Teachers
Route::resource('/platform/teachers', TeacherController::class)->except('show');
Route::get('/platform/teachers/list', [TeacherController::class, 'list'])->name('teachers.list');
Route::get('/platform/teachers/list/view/{id}', [TeacherController::class, 'view'])->name('teachers.view');