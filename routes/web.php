<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
});

Route::view('/about', 'web.navbar.about')->name('about');
