<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/forget-password', 'ForgetPasswordController@showLinkRequestForm')->name('forget-password');
Route::post('/forget-password', 'ForgetPasswordController@sendResetLinkEmail')->name('forget-password');

Route::post('logout', 'LoginController@logout')->name('logout');
