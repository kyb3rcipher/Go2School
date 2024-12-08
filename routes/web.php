<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlatformAdmin\StudentController;
use App\Http\Controllers\PlatformAdmin\GroupController;
use App\Http\Controllers\PlatformAdmin\TeacherController;
use App\Http\Controllers\PlatformAdmin\ClassroomController;

// Home
Route::view('/', 'index')->name('home');
Route::view('/pricing', 'pricing')->name('home.pricing');
Route::view('/about', 'about')->name('home.about');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/***** Platform Admin *****/
Route::view('/platform', 'platform-admin.index')->name('platform-admin.index');

// Students
Route::resource('/platform/students', StudentController::class)->except(['show']);
Route::get('/platform/students/list', [StudentController::class, 'list'])->name('students.list');
Route::get('/platform/students/list/view/{id}', [StudentController::class, 'view'])->name('students.view');
//groups
Route::get('/platform/students/groups', [GroupController::class, 'index'])->name('students.groups.index');

// Teachers
Route::resource('/platform/teachers', TeacherController::class)->except('show');
Route::get('/platform/teachers/list/view/{id}', [TeacherController::class, 'view'])->name('teachers.view');
Route::get('/platform/teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::delete('/platform/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
Route::get('/platform/teachers/list', [TeacherController::class, 'list'])->name('teachers.list');
//classroms
Route::get('/platform/classrooms/list', [ClassroomController::class, 'list'])->name('classrooms.list');
Route::delete('/platform/classrooms/{id}', [ClassroomController::class, 'destroy'])->name('classrooms.destroy');
