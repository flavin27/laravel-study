<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'App\Http\Controllers\RegisterController@postRegister')->name('register');