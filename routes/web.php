<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::resource('espadas', 'App\Http\Controllers\Espadas')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

