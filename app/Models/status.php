<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class status extends Model
{

    protected $fillable =['jumlah_pesanan','pengguna','sudah_terima'];
    public static function query(): Builder{
        return parent::query()->where('pengguna',auth()->id());
    }
}

