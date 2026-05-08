<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/register');
});

Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'submitlogin')->name('auth.submit.login')->middleware('throttle:5,1');

    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'submitregister')->name('auth.submit.register');
    Route::get('/logout', 'logout')->name('logout');

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/dashboard/instructor', function () {
        return view('dashboard.instructor');
    })->name('dashboard.instructor');

    Route::get('/dashboard/student', function () {
        return view('dashboard.student');
    })->name('dashboard.student');

});
