<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.home');
});
Route::get('/profile', function () {
    return view('Pages.profile');
});

