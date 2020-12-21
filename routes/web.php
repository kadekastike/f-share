<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'reset' => false,
    'verify' => false,
]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jurnal', [App\Http\Controllers\JurnalController::class, 'index']);
Route::post('/jurnal/upload', [App\Http\Controllers\JurnalController::class, 'uploadProccess']);
Route::get('/jurnal/hapus/{id}', [App\Http\Controllers\JurnalController::class, 'delete']);
Route::get('/jurnal/lihat', [App\Http\Controllers\JurnalGuestController::class, 'index']);
Route::get('/jurnal/lihat/{id}', [App\Http\Controllers\JurnalGuestController::class, 'lihat']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
