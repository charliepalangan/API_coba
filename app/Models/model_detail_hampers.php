<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_detail_hampers extends Model
{
    use HasFactory;

    protected $table = 'detail_hampers';
    protected $primaryKey = [
        'Hampers_Id',
        'Produk_Id'
    ];

    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'Hampers_Id',
        'Produk_Id',
        'Jumlah'
    ];

}
