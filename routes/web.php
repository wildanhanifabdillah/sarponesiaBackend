<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

// Registration Routes
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// User Landing Page Route
Route::get('/user/landing', function () {
    return view('/user/landing'); // Make sure you have a landing.blade.php file in resources/views
})->name('user.landing');

// Admin Dashboard Route
Route::get('/admin/dashboard', function () {
    return view('/admin/dashboard'); // Make sure you have a dashboard.blade.php file in resources/views
})->name('admin.dashboard');

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


