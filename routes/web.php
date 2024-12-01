<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-home.index');

Route::view('/pricing', 'landing-home.pricing');

Route::view('/about', 'landing-home.about');

Route::view('/platform', 'platform.index')->name('platform-index');

Route::resource('/platform/students', StudentController::class)->except(['show']);
Route::get('/platform/students/list', [StudentController::class, 'list'])->name('students.list');
Route::get('/platform/students/list/view/{id}', [StudentController::class, 'view'])->name('students.view');

// Groups
Route::resource('/platform/students/groups', GroupController::class)->name('index', 'students.groups');


// Subjects
Route::resource('/platform/teachers/subjects', SubjectController::class);

// Teachers
Route::resource('/platform/teachers', TeacherController::class)->except('show');
Route::get('/platform/teachers/list/view/{id}', [TeacherController::class, 'view'])->name('teachers.view');
Route::get('/platform/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::delete('/platform/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');