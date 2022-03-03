<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/ver/usuario/{user}', [App\Http\Controllers\PostController::class, 'index']); */
Route::get('/u/{user}', [App\Http\Controllers\PostController::class, 'index']);
/* Route::get('/{user}', [App\Http\Controllers\UserController::class, 'index']); */

Route::resource('posts', App\Http\Controllers\PostController::class)
    ->except(['index']);
/* Route::resource('users', App\Http\Controllers\UserController::class)
    ->except(['index']); */
