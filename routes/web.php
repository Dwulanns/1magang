<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home.home');
});

Route::get('/about', function () {
    return view('home.about');
});
