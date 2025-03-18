<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/home','home')->name("home");
Route::view('/about','about')->name("about");
Route::view('/news', 'news')->name("news");
Route::view('/login', 'login')->name('login');
Route::view('/contact', 'contact')->name('contact');
Route::view('/patners', 'patners')->name('patners');
Route::view('/live-map','live-map')->name('live-map');
Route::view('/pilot-center','pilot-center')->name('pilot-center');
Route::view('/recruitment', 'recruitment')->name('recruitment');
Route::view('/hubs','hubs')->name('hubs');
Route::view('/registration','registration')->name('registration');


