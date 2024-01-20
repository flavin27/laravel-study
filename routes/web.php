<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('register');
});

Route::get('/register', function () {
    return view('register');
});
Route::post('/register', 'App\Http\Controllers\RegisterController@postRegister')->name('register');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'App\Http\Controllers\LoginController@postLogin')->name('login')->middleware('web');

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
})->name('logout');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');