<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/pemesan', function () {
    return view('pemesanan');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/login', [GalonController::class, 'login'])->name('login');
Route::post('/login', [Galoncontroller::class, 'login'])->name('login.process');
