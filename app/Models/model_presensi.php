<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_presensi extends Model
{
    use HasFactory;

    protected $table = 'presensi';

    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Tanggal',
        'Karyawan_Id',
        'Status',
    ];
}
