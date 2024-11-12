<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginRegisterController;

Route::view('/LandingPage','LandingPage')->name('landingpage');
Route::get('/LandingPage', [LandingPageController::class, 'index'])->name('landingpage');

Route::get('/register', [LoginRegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginRegisterController::class, 'register']);

Route::get('/login', [LoginRegisterController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginRegisterController::class, 'login']);

Route::get('/forgot-password', [LoginRegisterController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password',[LoginRegisterController::class, 'passwordEmail']);
Route::get('/reset-password/{token}',[LoginRegisterController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [LoginRegisterController::class, 'passwordUpdate'])->name('password.update');

Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');




