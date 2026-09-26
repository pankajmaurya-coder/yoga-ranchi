<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::view('/about', 'web.navbar.about')->name('about');
Route::view('/contact', 'web.navbar.contact')->name('contact');
Route::view('/director', 'web.navbar.director')->name('director');
Route::view('/coordinater', 'web.navbar.coordinater')->name('coordinater');
Route::view('/vice-chancellor', 'web.navbar.vice-chancellor')->name('vc');
Route::view('/examination', 'web.navbar.exam')->name('exam');

Route::view('/syllabus', 'web.navbar.syllabus')->name('syllabus');

Route::view('/achievements', 'web.navbar.achievements')->name('achievements');
Route::view('/media', 'web.navbar.media')->name('media');
Route::view('/seminars', 'web.navbar.seminar')->name('seminars');