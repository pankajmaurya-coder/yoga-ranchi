<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::view('/about', 'web.navbar.about')->name('about');
