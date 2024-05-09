<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_pengeluaran_lain_lain extends Model
{
    use HasFactory;

    protected $table = 'pengeluaran_lain_lain';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nama_Pengeluaran',
        'Harga',
        'Satuan',
        'Qty',
    ];



}
