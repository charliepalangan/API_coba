<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_detail_transaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';

    protected $primaryKey = 'Detail_Id';

    public $timestamps = false;

    protected $fillable = [
        'SubTotal',
        'Total_Produk',
        'Produk_Id',
        'Pesanan_Id',
        'Hampers_Id',
    ];

}
