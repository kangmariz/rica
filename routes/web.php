<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Info.name');
});
Route::get('/age', function () {
    return view('Info.age');
});
Route::get('/contact', function () {
    return view('Info.contact');
});
