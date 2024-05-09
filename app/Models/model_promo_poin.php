<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_promo_poin extends Model
{
    use HasFactory;

    protected $table = 'promo_poin';

    protected $primaryKey = 'Id';

    public $timestamps = false;


    protected $fillable = [
        'Nama',
        'Poin',
        'isDoublePoint',
    ];


}
