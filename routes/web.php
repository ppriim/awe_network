<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Laravel is working ✅';
});

Route::get('/about', function () {
    return view('about');
});