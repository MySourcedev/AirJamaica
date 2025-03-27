<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','home')->name('home');
Route::view('/home','home')->name("home2");
Route::view('/about','about')->name("about");
Route::view('/news', 'news')->name("news");
Route::view('/contact', 'contact')->name('contact');
Route::view('/patners', 'patners')->name('patners');
Route::view('/live-map','live-map')->name('live-map');
Route::view('/pilot-center','pilot-center')->name('pilot-center');
Route::view('/recruitment', 'recruitment')->name('recruitment');
Route::view('/hubs','hubs')->name('hubs');


Route::view('/changepassword','changepassword')->name('changepassword');
Route::view('/mail','mail')->name('mail');
Route::view('/filepireps','filepireps')->name('filepireps');
Route::view('/bids','bids')->name('bids');
Route::view('/schedules','schedules')->name('schedules');
Route::view('/stats','stats')->name('stats');
Route::view('/badge','badge')->name('badge');
Route::view('/routemap','routemap')->name('routemap');
Route::view('/mine','mine')->name('mine');

Route::controller(SessionController::class)->group(function(){
    Route::get('/registration','register')->name('registration');
    Route::get('/login','reqlogin')->name('reqlogin');

    Route::post('/store','store')->name('store');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout','logout')->name('logout');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/profile/{user}', 'show')->name('profile');
    Route::get('/editprofile/{user}', 'edit')->name('editprofile');
});