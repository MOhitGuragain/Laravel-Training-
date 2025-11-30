<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
Route::get('/login', [AuthController::class, 'showLoginForm']) ->name('Login'); 
Route::post('/login', [AuthController::class, 'Submitlogin']) ->name('login.submit');
Route::get('', [Dashboard::class,'index'])->name('dashboard');
Route::get('/logout', [AuthController::class,'Logout'])->name('logout');
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('exams', ExamController::class);
Route::resource('results', ResultController::class);
Route::resource('enrollments', EnrollmentController::class);
