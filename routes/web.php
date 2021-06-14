<?php

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
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');
Route::get('/add-permission', [App\Http\Controllers\HomeController::class, 'addPermission'])->name('addPermission');
Route::get('/add-post', [App\Http\Controllers\HomeController::class, 'addPost'])->name('addPost');
Route::get('/read-post', [App\Http\Controllers\HomeController::class, 'readPost'])->name('readPost');

