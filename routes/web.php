<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;

Route::get('/pemesanan', function () {
    return view('pemesanan');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/proses', function () {
    return view('proses');
});
Route::get('/rincian', function () {
    return view('rincian');
});
Route::get('/riwayat', function () {
    return view('riwayat pemesanan');
});
Route::get('/edit', function () {
    return view('edit riwayat');
});
Route::get('/tambah', function () {
    return view('tambah pesanan');
});

Route::post('/tambah',[PelangganController::class,'store']);
Route::get('/proses', [OrderController::class, 'proses'])->name('order.proses');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('pelanggans', PelangganController::class);
Route::post('/order-submit', [OrderController::class, 'submit'])->name('order.submit');
Route::post('/proses', [OrderController::Class, 'proses'])->name('order.proses');
