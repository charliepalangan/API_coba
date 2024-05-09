<?php

namespace App\Services;

use App\Models\model_resep;
use App\Models\model_produk;

class service_resep
{
    public function generateResepAllProduk()
    {
        $product = model_produk::all();
        $resep = model_resep::all();

        foreach ($product as $p) {
            if ($p->Penitip_Id == null) {


                $this->createResep($p);
            }
        }
    }
    public function createResep($produk)
    {
        $resep_create = new model_resep();
        $resep_create->Nama = "Resep $produk->Nama";
        $resep_create->Produk_Id = $produk->Id;
        $resep_create->save();
    }

    public function updateResep($produk, $id)
    {
        $resep = model_resep::where('Produk_Id', $id)->first();
        $resep->Nama = "Resep $produk->Nama";
        $resep->save();
    }

    public function deleteResep($id)
    {
        $resep = model_resep::where('Produk_Id', $id)->first();
        $resep->delete();
    }
}
