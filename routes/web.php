<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = User::find(2);
    $phone = \App\Models\Phone::find(2);

    dd($user->phone->number);

//    dd($user->phone);
//    $user->phone()->create([
//        'number' => '1199881144'
//    ]);

    return view('home');
});

Route::get('services', function () {
    return view('services');
})->middleware('admin');

Route::get('about', function () {
    return view('about');
});

Route::resource('posts', \App\Http\Controllers\PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
