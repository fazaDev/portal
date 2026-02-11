<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/profil', function () {
    return view('frontend.profil.detail');
})->name('profil');

Route::get('/berita', function () {
    return view('frontend.berita.index');
})->name('berita');

Route::get('/berita/detail', function () {
    return view('frontend.berita.detail');
})->name('berita.detail');
