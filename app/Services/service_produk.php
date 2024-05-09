<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\model_produk;

class service_produk
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function get_produk() : object
    {
        return model_produk::select(
            'produk.Id as Id',
            'produk.Nama as Nama_Produk',
            'produk.Harga as Harga_Produk',
            'produk.Satuan as Satuan_Produk',
            'produk.Stok as Stok_Produk',
            'produk.Satuan as Satuan_Produk',
            'penitip.Nama_Penitip as Penitip',
            'kategori.Kategori as Kategori',
            'produk.Kategori_Id as Kategori_Id',
            'penitip.Id as Penitip_Id',
            'Gambar as Gambar'
        )->leftJoin('penitip', 'produk.Penitip_Id', '=', 'penitip.Id')
        ->leftJoin('kategori', 'produk.Kategori_Id', '=', 'kategori.Id')
        ->get();
    }

    public function getProdukById(int $id) : object
    {
        return model_produk::select(
            'produk.Id as Id',
            'produk.Nama as Nama_Produk',
            'produk.Harga as Harga_Produk',
            'produk.Satuan as Satuan_Produk',
            'produk.Stok as Stok_Produk',
            'produk.Satuan as Satuan_Produk',
            'penitip.Nama_Penitip as Penitip',
            'kategori.Kategori as Kategori',
            'produk.Kategori_Id as Kategori_Id',
            'penitip.Id as Penitip_Id',
            'Gambar as Gambar',
        )->leftJoin('penitip', 'produk.Penitip_Id', '=', 'penitip.Id')
        ->leftJoin('kategori', 'produk.Kategori_Id', '=', 'kategori.Id')
        ->where('produk.Id', '=', $id)
        ->get();
    }


    public function getProdukWithPenitip() : object
    {
        return model_produk::select(
            'produk.Id as Id',
            'produk.Nama as Nama_Produk',
            'produk.Harga as Harga_Produk',
            'produk.Satuan as Satuan_Produk',
            'produk.Stok as Stok_Produk',
            'produk.Satuan as Satuan_Produk',
            'penitip.Nama_Penitip as Penitip',
            'kategori.Kategori as Kategori',
            'produk.Kategori_Id as Kategori_Id',
            'penitip.Id as Penitip_Id',
            'Gambar as Gambar'
        )->leftJoin('penitip', 'produk.Penitip_Id', '=', 'penitip.Id')
        ->leftJoin('kategori', 'produk.Kategori_Id', '=', 'kategori.Id')
        ->get();
    }

    public function getProdukPenitip() : object
    {
        return model_produk::select(
            'produk.Id as Id',
            'produk.Nama as Nama_Produk',
            'produk.Harga as Harga_Produk',
            'produk.Satuan as Satuan_Produk',
            'produk.Stok as Stok_Produk',
            'produk.Satuan as Satuan_Produk',
            'penitip.Nama_Penitip as Penitip',
            'kategori.Kategori as Kategori',
            'produk.Kategori_Id as Kategori_Id',
            'penitip.Id as Penitip_Id',
            'Gambar as Gambar'
        )->leftJoin('penitip', 'produk.Penitip_Id', '=', 'penitip.Id')
        ->leftJoin('kategori', 'produk.Kategori_Id', '=', 'kategori.Id')
        ->whereNotNull('produk.Penitip_Id')
        ->get();
    }

}
