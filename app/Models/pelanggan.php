<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    // Tentukan kolom yang bisa diisi secara massal (fillable)
    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon',
    ];
}
