<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
