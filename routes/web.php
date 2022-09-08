<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * route resource posts
 */
Route::resource('/posts', App\Http\Controllers\PostController::class);