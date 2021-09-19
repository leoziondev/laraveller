<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});
Route::view('about', 'about');
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{id?}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
