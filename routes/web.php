<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;

Route::view('/LandingPage','LandingPage')->name('home');
Route::get('/LandingPage', [LandingPageController::class, 'index'])->name('home');

Route::get('/register', [LoginRegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [LoginRegisterController::class, 'register']);

Route::get('/login', [LoginRegisterController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginRegisterController::class, 'login']);

Route::get('/forgot-password', [LoginRegisterController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password',[LoginRegisterController::class, 'passwordEmail']);
Route::get('/reset-password/{token}',[LoginRegisterController::class, 'passwordReset'])->name('password.reset');
Route::post('/reset-password', [LoginRegisterController::class, 'passwordUpdate'])->name('password.update');

Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::get('/benih-dan-pupuk', [ProductController::class, 'showBenihDanPupuk'])->name('benihpupuk');

Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');








//seadanya dlu
Route::get('/peralatan', function () {
    return view('PerlengkapanProduksi_alat');
});

Route::get('/perawatan', function () {
    return view('JasaKebunKopi_perawatan');
});

Route::get('/katalog',function(){
    return view('Katalog');
});

Route::get('/contact',function(){
    return view('Kontak');
});

Route::get('/alat', function () {
    return view('PerlengkapanProduksi_alat');
})->name('alat');

Route::get('/pelatihan', function () {
    return view('Pelatihan');
})->name('pelatihan');


Route::get('/kopi_produk', function () {
    return view('Katalog');
})->name('kopi_produk');


Route::get('/pelatihan',function(){
    return view('Pelatihan');
})->name('pelatihan');


Route::get('/program',function(){
    return view('Program');
});

Route::get('/komunitas',function(){
    return view('Komunitas');
});

Route::get('/card',function(){
    return view('card');
});




