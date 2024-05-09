<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_pengadaan_bahan_baku extends Model
{
    use HasFactory;

    protected $table = 'pengadaan_bahan_baku';
    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Satuan',
        'Qty',
        'Harga',
        'BahanBaku_Id',
        'Tanggal_Pengadaan',
    ];
}
