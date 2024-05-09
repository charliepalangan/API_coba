<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_detail_resep extends Model
{
    use HasFactory;

    protected $table = 'detail_resep';
    protected $primaryKey = [
        'Resep_Id',
        'Bahan_Baku_Id'
    ];

    public $timestamps = false;

    protected $fillable = [
        'Resep_Id',
        'Bahan_Baku_Id',
        'Qty',
        'Satuan'
    ];

    


}
