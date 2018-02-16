<?php

Route::get('/', function () {
    return view('welcome');
});



Route::resource('restaurante', 'RestauranteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
