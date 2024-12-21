<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
})->name('index');
Route::get('/nosotros', function () {
    return view('public.about');
})->name('about');
Route::get('/contactanos', function () {
    return view('public.contact');
})->name('contact');
Route::post('/contactanos',[MailController::class, 'sendEmail'])->name('contact-post');