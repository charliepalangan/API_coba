<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_pesanan extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'pesanan';

    protected $primaryKey = 'Id';


    protected $fillable = [
        'Id',
        'Ongkos_Kirim',
        'Total',
        'Status',
        'Tanggal_Diambil',
        'Tanggal_Pesan',
        'Customer_Email',
        'Bukti_Pembayaran',
        'Tanggal_Pelunasan',
        'Alamat_Id',
        'Status_Pembayaran',
        'Tip',
        'Poin_Didapat',
        'Penggunaan_Poin',
        'Is_Deliver',
        'created_at',
        'updated_at',
    ];


}
