<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_penitip extends Model
{
    use HasFactory;

    protected $table = 'penitip';
    protected $primaryKey = 'Id';

    public $timestamps = false;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Id',
        'Nama_Penitip',
        'komisi'
    ];
}
