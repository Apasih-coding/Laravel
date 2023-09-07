<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pesanan',
        'tanggal',
        'nm_supplier',
        'nm_produk',
        'total',
    ];
}
