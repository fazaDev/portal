<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', function () {
    return view('frontend.profil.detail');
})->name('profil');

Route::get('/berita', function () {
    return view('frontend.berita.index');
})->name('berita');

Route::get('/berita/detail', function () {
    return view('frontend.berita.detail');
})->name('berita.detail');

Route::get('/profil/struktur-organisasi', function () {
    return view('frontend.profil.struktur-organisasi');
})->name('profil.struktur-organisasi');

