<?php

namespace App\Services;

use App\Models\model_bahan_baku;
use App\Models\model_pengadaan_bahan_baku;

class service_pengadaan_bahan_baku
{

    public function getDetailPengadaan()
    {
        $pengadaan_bahan_baku = model_pengadaan_bahan_baku::select(
            'pengadaan_bahan_baku.Id',
            'pengadaan_bahan_baku.Satuan',
            'pengadaan_bahan_baku.Qty',
            'pengadaan_bahan_baku.Harga',
            'bahan_baku.Nama as BahanBaku_Nama',
            'pengadaan_bahan_baku.Tanggal_Pengadaan',
            'bahan_baku.Id as BahanBaku_Id'
        )->join('bahan_baku', 'bahan_baku.Id', '=', 'pengadaan_bahan_baku.BahanBaku_Id')->get();

        return $pengadaan_bahan_baku;
    }

    public function getDetailPengadaanByID($id)
    {
        $pengadaan_bahan_baku = model_pengadaan_bahan_baku::select(
            'pengadaan_bahan_baku.Id',
            'pengadaan_bahan_baku.Satuan',
            'pengadaan_bahan_baku.Qty',
            'pengadaan_bahan_baku.Harga',
            'bahan_baku.Nama as BahanBaku_Nama',
            'pengadaan_bahan_baku.Tanggal_Pengadaan',
            'bahan_baku.Id as BahanBaku_Id'
        )->join('bahan_baku', 'bahan_baku.Id', '=', 'pengadaan_bahan_baku.BahanBaku_Id')->where('pengadaan_bahan_baku.Id', $id)->get();

        return $pengadaan_bahan_baku;
    }

    public function getJumlahQtyBahanBaku($id)
    {
        $jumlah_qty = model_bahan_baku::select('Qty')->where('Id', $id)->first();
        return $jumlah_qty;
    }

    public function updateQtyBahanBaku($id, $qty)
    {
        $bahan_baku = model_bahan_baku::find($id);
        $bahan_baku->Qty = $qty;
        $bahan_baku->save();
    }
}
