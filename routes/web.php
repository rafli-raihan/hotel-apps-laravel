<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//get (melihat/read), post (insert/create), put (update), delete (hapus) ==> semuanya pakai form
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action');

Route::get('get-room-by-category/{id}', [\App\Http\Controllers\ReservationController::class, 'getRoomByCategory'])->name("get-room-by-category");

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('user',  \App\Http\Controllers\UserController::class);
Route::resource('categories',  \App\Http\Controllers\CategoriesController::class);
Route::resource('rooms',  \App\Http\Controllers\RoomsController::class);
Route::resource('guests',  \App\Http\Controllers\GuestController::class);
Route::resource('reservation', \App\Http\Controllers\ReservationController::class);
