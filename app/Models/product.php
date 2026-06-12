<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['nama_produk', 'harga', 'stok', 'deskripsi'];
}
