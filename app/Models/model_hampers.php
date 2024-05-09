<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_hampers extends Model
{
    use HasFactory;

    protected $table = 'hampers';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Nama_Hampers',
        'Harga',
        'Gambar'
    ];


}
