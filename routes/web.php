<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;


Route::get('/', function () {
    return view('login');
})->name('loginroute');
Route::get('/register', function () {
    return view('register'); //register.blade.php
})->name('registerroute');


Route::resource('user', CustomUserController::class);