<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class model_karyawan extends Model
{
    use HasFactory,HasApiTokens;

    protected $table = 'karyawan';
    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Password',
        'Nama',
        'Total_Gaji',
        'Bonus',
        'Role_Id'
    ];


}
