<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class model_customer extends Model
{
    use HasFactory,HasApiTokens;

    protected $table = 'customer';
    protected $primaryKey = 'Email';

    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Email',
        'Nama',
        'Password',
        'Total_Poin',
        'Total_Saldo',
        'IsPengajuanSaldo',
        'Nama_Bank',
        'Nomor_Rekening',
        'Tanggal_Lahir'
    ];
}
