<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/{cat}','ProductController@showCategory')->name('showCategory');
Route::get('/{cat}/{product_id}','ProductController@show')->name('showProduct');
Auth::routes();

//Route::get('/home', 'ProductController@index')->name('home');

