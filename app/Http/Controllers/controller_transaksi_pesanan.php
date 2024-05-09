<?php

namespace App\Http\Controllers;

use App\Http\Resources\resource_produk;
use Illuminate\Http\Request;
use App\Models\model_produk;
use App\Services\services_Katalog_Produk;
use App\Services\service_produk;
use App\Services\service_utils;

class controller_transaksi_pesanan extends Controller
{
    private services_Katalog_Produk $service_katalog_produk;

    private service_produk $service_produk;

    private service_utils $service_utils;

    public function __construct(services_Katalog_Produk $service_katalog_produk, service_produk $service_produk, service_utils $service_utils)
    {
        $this->service_katalog_produk = $service_katalog_produk;
        $this->service_produk = $service_produk;
        $this->service_utils = $service_utils;
    }

    public function getProdukByIdWithQuota(int $Id, String $date){
        $produk = $this->service_produk->getProdukById($Id);
        $produk = $produk[0];
        $produk->Kuota = $this->service_katalog_produk->cekQuotaProdukPerTanggal($date, $Id, 10);
        $produk->Kuota = $this->service_katalog_produk->cekQuotaProdukDalamHamper($date, $Id, $produk->Kuota);

        $produkWithGambar = $this->service_utils->getSingleImageUrl($produk, 'Gambar');

        return new resource_produk($produkWithGambar);
    }
}
