<?php

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('new_customer', 'CustomerController@new_customer');