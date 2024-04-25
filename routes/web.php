<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\seller\SellerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::patch('/profile/change-image', [ProfileController::class, 'changeImage'])->name('profile.changeImage');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::middleware(['admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    Route::middleware(['seller'])->prefix('seller')->group(function () {
        Route::get('/dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
    });
});
