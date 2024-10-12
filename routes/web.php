<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Models\Pelanggan;

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