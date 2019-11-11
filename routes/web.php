<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::view('/', 'welcome');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
