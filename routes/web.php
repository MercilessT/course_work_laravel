<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@landing');

Route::get('/landing', 'App\Http\Controllers\MainController@landing');

Route::get('/about_us', 'App\Http\Controllers\MainController@about_us');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::get('/services', 'App\Http\Controllers\MainController@services');

Route::get('/sign_up', 'App\Http\Controllers\MainController@sign_up');

Route::post('/sign_up/check', 'App\Http\Controllers\MainController@sign_up_check');

Route::fallback(function () {
    return view('landing');
});
