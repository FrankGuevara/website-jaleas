<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
})->name('index');
Route::get('/nosotros', function () {
    return view('public.about');
})->name('about');
