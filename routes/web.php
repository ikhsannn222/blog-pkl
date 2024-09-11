<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello', [HelloController::class, 'create']);
// Route::get('world', [HelloController::class, 'world_message']);
//  Route::resource('posts', PostController::class);

Route::get('posts', [PostController::class, 'index']);
