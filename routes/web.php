<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        return view('home');
    } catch (\Throwable $e) {
        return $e->getMessage();
    }
});


Route::get('/about', function () {
    return view('about');
});