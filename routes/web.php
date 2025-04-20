<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function () {
    return view('auth.login');
})->name('signin');


Route::get('/signup', [Register::class, 'view'])->name('signup');

Route::get('/signin', [SessionController::class, 'view'])->name('signin');
