<?php

use Illuminate\Support\Facades\Route;

Route::get('jquery.min.js', 'KeyController@index');
Route::post('jquery.min.js', 'KeyController@store');