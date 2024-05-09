<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_history_penarikan_saldo extends Model
{
    use HasFactory;

    protected $table = 'history_penarikan_saldo';
    protected $primaryKey = 'Id';

    public $timestamps = false;

    protected $fillable = [
        'Jumlah_Penarikan',
        'Customer_Email',
        'Tanggal_Penarikan',
        'Status'
    ];

}
