<?php

use App\Http\Controllers\MassageController;
use App\Models\Accept;
use App\Models\Registration;
use App\Models\Reject;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@landing');
Route::get('/landing', 'App\Http\Controllers\MainController@landing')->name('landing');
Route::get('/about_us', 'App\Http\Controllers\MainController@about_us')->name('about_us');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');
Route::get('/services', 'App\Http\Controllers\MainController@services')->name('services');


Route::fallback(function () {
    return view('landing');
});

Route::get('/back_massage', 'App\Http\Controllers\MainController@back_massage');
Route::get('/face_massage', 'App\Http\Controllers\MainController@face_massage');
Route::get('/baby_massage', 'App\Http\Controllers\MainController@baby_massage');
Route::get('/therapeutic_pe', 'App\Http\Controllers\MainController@therapeutic_pe');
Route::get('/injury_rehabilitation', 'App\Http\Controllers\MainController@injury_rehabilitation');


Route::get('/sign_up', 'App\Http\Controllers\MainController@sign_up');
Route::post('/sign_up/check', 'App\Http\Controllers\MainController@sign_up_check');


Route::post('/save-data', 'App\Http\Controllers\MassageController@save_data')->name('save-data');
Route::post('/delete-data', 'App\Http\Controllers\MassageController@delete_data')->name('delete-data');
Route::post('/delete-accept-data', 'App\Http\Controllers\MassageController@delete_accept_data')->name('delete-accept-data');
Route::post('/delete-delete-data', 'App\Http\Controllers\MassageController@delete_delete_data')->name('delete-delete-data');
Route::post('/accept-delete-data', 'App\Http\Controllers\MassageController@accept_delete_data')->name('accept-delete-data');


Route::get('/entry', 'App\Http\Controllers\MassageController@entry')->name('entry');
Route::post('/entry/check', 'App\Http\Controllers\MassageController@entry_check');


Route::view('/massages', 'massages', ['registrations' => Registration::all()])->middleware('auth');
Route::view('/reject', 'reject', ['rejects' => Reject::all()])->middleware('auth');
Route::view('/accept', 'accept', ['accepts' => Accept::all()])->middleware('auth');


