<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InstructorDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return redirect('/login');
});

Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'submitlogin')->name('auth.submit.login')->middleware('throttle:5,1');

    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'submitregister')->name('auth.submit.register');
    Route::get('/logout', 'logout')->name('logout');
});



Route::middleware('auth')->group(function () {

    Route::get('/dashboard/admin', [AdminDashboardController::class, 'index'])
        ->name('dashboard.admin');

    Route::get('/dashboard/instructor', [InstructorDashboardController::class, 'index'])
        ->name('dashboard.instructor');

    Route::get('/dashboard/student', [StudentDashboardController::class, 'index'])
        ->name('dashboard.student');
});

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::put('/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::put('/password', [ProfileController::class, 'changepassword'])->name('profile.password');

    Route::resource('user-management', UserController::class)->middleware('admin');
});
