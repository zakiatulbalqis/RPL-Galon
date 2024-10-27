<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rincian_pesanan extends Model
{
    protected $fillable = [
        'nama_pesanan',
        'jumlah_pesanan',
        'struk_gambar',
        
    ];
}
