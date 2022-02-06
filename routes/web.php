<?php

use Illuminate\Support\Facades\Route;

Route::resource('espadas', 'App\Http\Controllers\Espadas');

Route::get('/', function () {
    return view('welcome');
});
