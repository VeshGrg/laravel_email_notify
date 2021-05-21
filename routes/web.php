<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareController;

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

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('home');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('create-user');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('add-user');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('show-user');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'] )->name('edit-user');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update-user');
    Route::delete('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete-user');

    Route::resource('shares', ShareController::class);
});

