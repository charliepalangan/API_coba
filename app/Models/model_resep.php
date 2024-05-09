<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_resep extends Model
{
    use HasFactory;

    protected $table = 'resep';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nama',
        'Produk_Id',
    ];
}
