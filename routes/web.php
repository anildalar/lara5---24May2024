<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('login');
})->name('loginroute');

Route::get('/register', function () {
    return view('register'); //register.blade.php
})->name('registerroute');


Route::resource('user', CustomUserController::class);

Route::post('/login',[AuthController::class,'login']);

Route::get('/welcome', function () {
    return view('welcome');   //welcome.blade.php
})->name('welcome');