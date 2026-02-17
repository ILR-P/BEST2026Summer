<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index'])->name('home');

Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course.show');

Route::get('/quiz', function () {return view('quiz');})->name('quiz');