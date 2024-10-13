<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function create()
    {
        return view('tambah-pelanggan'); // Return the view with the form
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string|max:15',
        ]);

        // Create a new customer record
        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
        ]);

        // Redirect back with success message
        return redirect('/riwayat')->with('success', 'Data berhasil disimpan');
    }
}
