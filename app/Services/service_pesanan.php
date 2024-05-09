<?php

namespace App\Services;

use App\Models\model_pesanan;
use App\Models\model_produk;
use App\Services\services_poin;



/**
 * Class service_pesanan.
 */
class service_pesanan
{
    private services_poin $service_Poin;

    public function __construct(services_poin $service_Poin)
    {
        $this->service_Poin = $service_Poin;
    }


    public function readHistoryByEmail(string $id): object
    {
        $pesanan = model_pesanan::select(
            'pesanan.Id as Id',
            'pesanan.Ongkos_Kirim as Ongkos_Kirim',
            'pesanan.Total as Total',
            'pesanan.Status as Status',
            'pesanan.Tanggal_Diambil as Tanggal_Diambil',
            'pesanan.Tanggal_Pesan as Tanggal_Pesan',
            'customer.Email as Email',
            'customer.Nama as Nama',
            'pesanan.Bukti_Pembayaran as Bukti_Pembayaran',
            'pesanan.Tanggal_Pelunasan as Tanggal_Pelunasan',
            'alamat.Alamat as Alamat',
            'pesanan.Status_Pembayaran as Status_Pembayaran',
            'pesanan.Tip as Tip',
        )
            ->leftJoin('customer', 'pesanan.Customer_Email', '=', 'customer.Email')
            ->leftJoin('alamat', 'pesanan.Alamat_Id', '=', 'alamat.Id')
            ->where('customer.Email', $id)
            ->get();


        foreach ($pesanan as $pes) {
            $produk = model_pesanan::select('produk.Nama as Nama_Produk')
                ->join('detail_transaksi', 'pesanan.Id', '=', 'detail_transaksi.Pesanan_id')
                ->join('produk', 'detail_transaksi.Produk_Id', '=', 'produk.Id')
                ->where('pesanan.Id', $pes->Id)
                ->get();

            $hampers = model_pesanan::select('hampers.Nama_Hampers as Nama_Hampers')
                ->join('detail_transaksi', 'pesanan.Id', '=', 'detail_transaksi.Pesanan_id')
                ->join('hampers', 'detail_transaksi.Hampers_Id', '=', 'hampers.Id')
                ->where('pesanan.Id', $pes->Id)
                ->get();

            $produkNames = [];
            foreach ($produk as $prod) {
                $produkNames[] = $prod->Nama_Produk;
            }
            $pes->Nama_Produk = implode(', ', $produkNames);


            $hampersNames = [];
            foreach ($hampers as $hamp) {
                $hampersNames[] = $hamp->Nama_Hampers;
            }
            $pes->Nama_Hampers = implode(', ', $hampersNames);
        }

        return $pesanan;
    }



    public function getAllHistoryPesanan(): object
    {
        return model_pesanan::select(
            'pesanan.Id as Id',
            'pesanan.Ongkos_Kirim as Ongkos_Kirim',
            'pesanan.Total as Total',
            'pesanan.Status as Status',
            'pesanan.Tanggal_Diambil as Tanggal_Diambil',
            'pesanan.Tanggal_Pesan as Tanggal_Pesan',
            'customer.Email as Email',
            'customer.Nama as Nama',
            'pesanan.Bukti_Pembayaran as Bukti_Pembayaran',
            'pesanan.Tanggal_Pelunasan as Tanggal_Pelunasan',
            'alamat.Alamat as Alamat',
            'pesanan.Status_Pembayaran as Status_Pembayaran',
            'pesanan.Tip as Tip',
        )->leftJoin('customer', 'pesanan.Customer_Email', '=', 'customer.Email')
            ->leftJoin('alamat', 'pesanan.Alamat_Id', '=', 'alamat.Id')
            ->get();
    }

    public function getLatestPesananId($month): String
    {
        $tahunNow = date('y');

        $latestPesanan = model_pesanan::select('Id')
            ->latest()->get()->first();


        if ($latestPesanan == null) {
            if ($month < 10)
                return $tahunNow . '.0' . $month . '.' . '00';
            else
                return $tahunNow . '.' . $month . '.' . '00';
        }

        return $latestPesanan->Id;
    }

    public function generateNoNota($month): String
    {
        $latestPesanan = $this->getLatestPesananId($month);

        $latestPesanan = explode('.', $latestPesanan);

        $latestPesanan[2] = strval(intval($latestPesanan[2]) + 1);

        $latestPesanan[2] = str_pad($latestPesanan[2], 2, '0', STR_PAD_LEFT);

        return implode('.', $latestPesanan);
    }

    public function penggunaanPoin($email, $total): int
    {
        $poin = $this->service_Poin->getPoinPerCustomer($email);

        $poinDigunakan = min(ceil($total / 100), $poin);

        $sisaPoin = $poin - $poinDigunakan;
        $this->service_Poin->setPoinPerCustomer($email, $sisaPoin);

        return $poinDigunakan;
    }

    public function updateTotalBayar($poinDigunakan, $total): float
    {
        return $total - ($poinDigunakan * 100);
    }

    public function isPenitip($produkId): bool
    {
        $produk = model_produk::find($produkId);

        return $produk->Penitip_Id != null;
    }

    public function kurangiStok($produkId, $jumlah): void
    {
        $produk = model_produk::find($produkId);

        $produk->Stok -= $jumlah;

        $produk->save();
    }

    public function PesanProduk($request): void
    {
        $pesanan = new model_pesanan();
        $pesanan->Id = $request['Id'];
        $pesanan->Customer_Email = $request['Customer_Email'];
        $pesanan->Tanggal_Pesan = $request['Tanggal_Pesan'];
        $pesanan->Tanggal_Diambil = $request['Tanggal_Diambil'];
        $pesanan->Status = "Menunggu Pembayaran";
        $pesanan->Status_Pembayaran = "Belum Lunas";
        $pesanan->Poin_Didapat = $request['Poin_Didapat'];
        $poinDigunakan = $this->penggunaanPoin($request['Customer_Email'], $request['Total']);
        $pesanan->Penggunaan_Poin = $poinDigunakan;
        $totalBayar = $this->updateTotalBayar($poinDigunakan, $request['Total']);
        $pesanan->Total = $totalBayar;
        $pesanan->save();
    }
}
