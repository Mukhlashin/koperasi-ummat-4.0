<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'kop_barang';

    protected $fillable = [
        'id_sekolah',
        'nama_barang',
        'harga',
        'kode_supplier',
        'stok',
        'foto',
        'deskripsi',
    ];
}
