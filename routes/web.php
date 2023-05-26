<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@landing');

Route::get('/landing', 'App\Http\Controllers\MainController@landing');

Route::get('/about_us', 'App\Http\Controllers\MainController@about_us');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::get('/services', 'App\Http\Controllers\MainController@services');

Route::get('/sign_up', 'App\Http\Controllers\MainController@sign_up');

Route::post('/sign_up/check', 'App\Http\Controllers\MainController@sign_up_check');

Route::get('/back_massage', 'App\Http\Controllers\MainController@back_massage');
Route::get('/face_massage', 'App\Http\Controllers\MainController@face_massage');
Route::get('/baby_massage', 'App\Http\Controllers\MainController@baby_massage');
Route::get('/therapeutic_pe', 'App\Http\Controllers\MainController@therapeutic_pe');
Route::get('/injury_rehabilitation', 'App\Http\Controllers\MainController@injury_rehabilitation');

Route::fallback(function () {
    return view('landing');
});

