<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galon extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $fillable = ['nama', 'alamat', 'no_telepon'];
}
