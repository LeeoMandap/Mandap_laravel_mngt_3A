<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('student', [\App\Http\Controllers\studentmanagement::class, 'index'])->name('student.index');
    Route::get('student/edit', [\App\Http\Controllers\studenteditcontroller::class, 'index'])->name('student.index');
    Route::get('student/delete', [\App\Http\Controllers\studentdeletecontroller::class, 'index'])->name('student.index');
    Route::get('student/add', [\App\Http\Controllers\studentaddcontroller::class, 'index'])->name('student.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
