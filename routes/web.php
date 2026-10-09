<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/profil2', function () {
    return view('pages.profil2');
});

Route::get('/home', function () {
    return view('pages.home');
});
