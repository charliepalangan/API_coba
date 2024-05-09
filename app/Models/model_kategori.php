<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'Id';

    public $timestamps = false;
    protected $fillable = [
        'Kategori',
    ];

}
