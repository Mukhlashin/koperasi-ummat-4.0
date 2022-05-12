<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KopBarang extends Model
{
    use HasFactory;

    protected $table = 'vw_kop_barang';

    protected $fillable = [
        'nama_barang',
        'nama_sekolah',
        'harga',
        'kode_supplier',
        'stok',
        'foto',
        'deskripsi',
    ];
}
