<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});
Route::view('about', 'about');
Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
