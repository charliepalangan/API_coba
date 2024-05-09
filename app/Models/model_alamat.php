<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_alamat extends Model
{
    use HasFactory;

    protected $table = 'alamat';
    protected $primaryKey = 'Id';
    public $timestamps = false;



    protected $fillable = [
        'Id',
        'Alamat',
        'Customer_Email',
        'Jarak'
    ];
}
