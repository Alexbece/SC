<?php

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('/', [HomeController::class, 'index'])->name('home');

// Page Auth
Route::get('/signup', function () {
    return view('client.auth.sign_up');
})->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.post');


Route::get('/login', function () {
    return view('client.auth.login');
})->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//delete account 

Route::post('/delete-account', [AuthController::class, 'deleteAccount'])->name('delete.account');

// Konselor Login

Route::get('/login-konselor', function () {
    return view('client.auth.konselor.konselorLogin');
})->name('konselorLogin');
Route::get('/signup-konselor', function () {
    return view('client.auth.konselor.konselorSignUp');
})->name('konselorSignUp');


Route::get('/profil-konselor', function () {
    return view('client.konselor.profilKonselor');
})->name('profilKonselor');


// Page Konselor
Route::get('/konselor', function () {
    return view('client.konselor.index');
})->name('page_konselor');

// Page Artikel
Route::get('/artikel', function () {
    return view('client.artikel.index');
})->name('artikel');

Route::get('/judul-artikel', function () {
    return view('client.artikel.blog_page');
})->name('blog_page');

// Account Pasien
Route::get('/profil', function () {
    return view('client.profil.profil_user.index');
})->name('profil');

Route::get('/profil/identitas', function () {
    return view('client.profil.profil_user.identitas');
});

Route::get('/profil/riwayat', function () {
    return view('client.profil.profil_user.riwayat');
});

// Konsultasi
Route::get('/konsultasi', function () {
    return view('client.konsultasi.index');
})->name('pagekonsultasi');

// Tentang Kami
Route::get('/tentang-kami', function () {
    return view('client.tentangkami.index');
})->name('tentangkami');