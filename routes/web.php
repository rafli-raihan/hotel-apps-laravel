<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


//get (melihat/read), post (insert/create), put (update), delete (hapus) ==> semuanya pakai form
Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login_action', [\App\Http\Controllers\LoginController::class, 'loginAction'])->name('login_action');

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);



// Route::get('belajar', function () {
//     return "<h1>Selamat Datang di Laravel</h1>";
// });

Route::get("call_name", [\App\Http\Controllers\BelajarController::class, 'getCallName']);
Route::get("tambah", [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('tambah');
Route::post('store_tambah', [App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
Route::get("kurang", [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('kurang');
Route::post('store_kurang', [App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store_kurang');
Route::get("kali", [\App\Http\Controllers\BelajarController::class, 'kali'])->name('kali');
Route::post('store_kali', [App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store_kali');
Route::get("bagi", [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('bagi');
Route::post('store_bagi', [App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store_bagi');
