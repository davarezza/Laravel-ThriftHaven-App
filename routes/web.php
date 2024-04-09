<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'registerPage'])->name('register');