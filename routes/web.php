<?php

use App\Http\Controllers\ProfileController;
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

Route::view('/former-vice-chancellor', 'web.navbar.former')->name('former');
Route::view('/former-director', 'web.navbar.f-director')->name('f-director');
Route::view('/teaching-faculties', 'web.navbar.teaching')->name('teaching');
Route::view('/non-teaching-faculties', 'web.navbar.non-teaching')->name('non-teaching');
Route::view('/library', 'web.navbar.acadmics.library')->name('library');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
