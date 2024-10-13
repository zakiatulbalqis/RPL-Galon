<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;
use App\Http\Controllers\OrderController;

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

Route::get('/riwayat', function(){
    $pelanggans = Pelanggan::all();
    return view ('riwayat pemesanan', ['pelanggans' => $pelanggans]);
});

Route::resource('pelanggans', PelangganController::class);

Route::post('/order-submit', [OrderController::class, 'submit'])->name('order.submit');

Route::get('/order-confirmation', [OrderController::class, 'konfirmasi'])->name('order.confirmation');