<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_history_bahan_baku extends Model
{
    use HasFactory;

    protected $table = 'history_bahan_baku';
    protected $primaryKey = 'Id';
    public $timestamps = false;

    protected $fillable = [
        'Tanggal_Digunakan',
        'Bahan_Baku_Id',
        'Jumlah_Penggunaan',
        'Satuan'
    ];

}
