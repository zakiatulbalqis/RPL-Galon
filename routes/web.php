<?php

use Illuminate\Support\Facades\Route;

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