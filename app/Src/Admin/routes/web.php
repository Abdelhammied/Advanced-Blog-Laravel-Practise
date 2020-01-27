<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard', 301)->name('index');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

