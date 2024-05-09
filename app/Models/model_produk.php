<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Nama',
        'Harga',
        'Satuan',
        'Stok',
        'Penitip_Id',
        'Gambar',
        'Kategori_Id'
    ];
}
