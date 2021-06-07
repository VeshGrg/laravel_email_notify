<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\DailytransactionController;
use Laravel\Socialite\Facades\Socialite;

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
    Route::get('/home', [App\Http\Controllers\UserController::class, 'home'])->name('landing');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('list-users');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('create-user');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('add-user');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('show-user');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'] )->name('edit-user');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('update-user');
    Route::delete('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('delete-user');

    Route::resource('shares', ShareController::class);

    Route::resource('dailytransactions', DailytransactionController::class);
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
    dd($user);
    // $user->token
});

