<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//get (melihat/read), post (insert/create), put (update), delete (hapus) ==> semuanya pakai form
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action');

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('user',  \App\Http\Controllers\UserController::class);
Route::resource('categories',  \App\Http\Controllers\CategoriesController::class);



// Route::get('belajar', function () {
//     return "<h1>Selamat Datang di Laravel</h1>";
// });
