<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\service_detail_pemesanan;
use App\Http\Requests\request_detail_pemesanan;

class controller_detail_pemesanan extends Controller
{
    private service_detail_pemesanan $service_detail_pemesanan;

    public function __construct(service_detail_pemesanan $service)
    {
        $this->service_detail_pemesanan = $service;
    }

    public function addDetailPemesananProduk(request_detail_pemesanan $request)
    {
        $detail_transaksi = $request->validated();
        $this->service_detail_pemesanan->addDetailPemesananProduk($detail_transaksi);
        return response()->json([
            "message" => "Detail pemesanan produk berhasil dibuat"
        ]);
    }
}
