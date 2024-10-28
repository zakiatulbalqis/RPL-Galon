<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class pesan extends Model
{
    protected $fillable =['nama_pelanggan','pengguna', 'jumlah_Pesanan','alamat','no hp','item','harga'];

    public static function query(): Builder{
        return parent::query()->where('pengguna',auth()->id());
    }
}
