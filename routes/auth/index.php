<?php


use Illuminate\Support\Facades\Route;

Route::post('login', 'login');
Route::post('register', 'register');
Route::post('logout', 'logout');
Route::post('refresh', 'refresh');
Route::post('me', 'me');

