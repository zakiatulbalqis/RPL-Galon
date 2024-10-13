<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $pelanggan = new  Pelanggan();
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->no_telepon = $request->no_telepon;

        $pelanggan->save();

        return redirect('/riwayat')->with('success', 'Data berhasil disimpan');
    }
    
}
