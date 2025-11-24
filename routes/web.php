<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm']) ->name('Login'); 
Route::post('/login', [AuthController::class, 'Submitlogin']) ->name('login.submit');
Route::get('', [Dashboard::class,'index'])->name('dashboard');
Route::get('/logout', [AuthController::class,'Logout'])->name('logout');
Route::resource('students', StudentController::class);


