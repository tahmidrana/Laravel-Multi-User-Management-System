<?php

Route::get('/', 'WelcomeController@index');

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@login');

Route::get('/dashboard', 'DashboardController@index');