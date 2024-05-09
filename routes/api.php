<?php

use App\Http\Controllers\controller_customer;
use App\Http\Controllers\controller_pesanan;
use App\Http\Controllers\controller_forgot_password;
use App\Http\Controllers\controller_reset_password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_auth;
use App\Http\Controllers\controller_promo_poin;
use App\Http\Controllers\controller_produk;
use App\Http\Controllers\controller_hampers;
use App\Http\Controllers\controller_detail_hampers;
use App\Http\Controllers\controller_kategori;
use App\Http\Controllers\controller_pengadaan_bahan_baku;
use App\Http\Controllers\controller_penitip;
use App\Http\Controllers\controller_bahan_baku;
use App\Http\Controllers\controller_pengeluaran;
use App\Http\Controllers\controller_presensi;
use App\Http\Controllers\controller_transaksi_pesanan;
use App\Http\Controllers\controller_resep;
use App\Http\Controllers\controller_detail_pemesanan;
use App\Http\Controllers\controller_karyawan;

Route::post('register', [controller_auth::class, 'register']);
Route::post('login', [controller_auth::class, 'login'])->withoutMiddleware('Role');
Route::post('logout', [controller_auth::class, 'logout'])->middleware('auth:sanctum');
Route::post('register_customer', [controller_customer::class, 'registerCustomer']);

Route::post('/forgot-password', [controller_forgot_password::class, 'forgotPassword']);
Route::post('/verify/pin', [controller_forgot_password::class, 'verifyPin']);
Route::post('/reset-password', [controller_reset_password::class, 'resetPassword']);

Route::post('register_karyawan', [controller_auth::class, 'register_karyawan']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(['middleware' => ['can:isOwner']], function () {
        Route::post('gaji_karyawan', [controller_karyawan::class, 'createkaryawan']);
        Route::delete('gaji_karyawan/{id_karyawan}', [controller_karyawan::class, 'deletekaryawan']);
        Route::get('gaji_karyawan', [controller_karyawan::class, 'readkaryawan']);
        Route::put('gaji_karyawan/{id_karyawan}', [controller_karyawan::class, 'updateGaji']);
    });

    Route::group(['middleware' => ['can:isAdmin']], function () {

        Route::post('promo_poin', [controller_promo_poin::class, 'createPromoPoin']);
        Route::put('promo_poin/{id}', [controller_promo_poin::class, 'updatePromoPoin']);
        Route::delete('promo_poin/{id}', [controller_promo_poin::class, 'deletePromoPoin']);
        Route::get('promo_poin', [controller_promo_poin::class, 'readPromo']);
        Route::get('promo_poin/{id}', [controller_promo_poin::class, 'getById']);

        Route::post('produk', [controller_produk::class, 'createProduk']);
        Route::put('produk/{id}', [controller_produk::class, 'updateProduk']);
        Route::delete('produk/{id}', [controller_produk::class, 'deleteProduk']);
        Route::get('produk', [controller_produk::class, 'readProduk']);
        Route::get('produk/{id}', [controller_produk::class, 'getById']);
        Route::get('produkNama/{nama}', [controller_produk::class, 'getByNama']);

        Route::post('hampers', [controller_hampers::class, 'createHampers']);
        Route::put('hampers/{id}', [controller_hampers::class, 'updateHampers']);
        Route::delete('hampers/{id}', [controller_hampers::class, 'deleteHampers']);
        Route::get('hampers', [controller_hampers::class, 'readHampers']);
        Route::get('hampers/{id}', [controller_hampers::class, 'getById']);

        Route::post('detail_hampers', [controller_detail_hampers::class, 'addProdukToHampers']);
        Route::delete('detail_hampers/{id_hampers}/{id_produk}', [controller_detail_hampers::class, 'deleteProdukFromHampers']);
        Route::put('detail_hampers/{id_hampers}/{id_produk}', [controller_detail_hampers::class, 'updateProdukFromHampers']);
        Route::get('detail_hampers/{id_hampers}', [controller_detail_hampers::class, 'getProdukFromHampers']);

        Route::post('bahan_baku', [controller_bahan_baku::class, 'createBahanBaku']);
        Route::delete('bahan_baku/{id_bahan_baku}', [controller_bahan_baku::class, 'deleteBahanBaku']);
        Route::put('bahan_baku/{id_bahan_baku}', [controller_bahan_baku::class, 'updateBahanBaku']);
        Route::get('bahan_baku', [controller_bahan_baku::class, 'readBahanBaku']);
        Route::get('bahan_baku/{id_bahan_baku}', [controller_bahan_baku::class, 'getById']);
        Route::get('bahan_baku_nama/{nama}', [controller_bahan_baku::class, 'getByNama']);

        Route::get('customer', [controller_customer::class, 'readCustomer']);
        Route::get('customer/{id_pengeluaran}', [controller_customer::class, 'getById']);
        Route::get('customer_nama/{nama}', [controller_customer::class, 'getByNama']);

        Route::get('history/{email}', [controller_pesanan::class, 'getHistoryByEmail']);
        Route::get('history', [controller_pesanan::class, 'getAllHistoryPesanan']);

        Route::post('resep', [controller_resep::class, 'createresep']);
        Route::delete('resep/{id_resep}', [controller_resep::class, 'deleteresep']);
        Route::put('resep/{id_resep}', [controller_resep::class, 'updateresep']);
        Route::get('resep', [controller_resep::class, 'readresep']);
        Route::get('resep/{id_resep}', [controller_resep::class, 'getDetailById']);
        Route::get('resep_nama/{nama}', [controller_resep::class, 'getDetail']);
    });

    Route::group(['middleware' => ['can:isMO']], function () {

        Route::post('pengadaan_bahan_baku', [controller_pengadaan_bahan_baku::class, 'createPengadaanBahanBaku']);
        Route::put('pengadaan_bahan_baku/{id}', [controller_pengadaan_bahan_baku::class, 'updatePengadaanBahanBaku']);
        Route::delete('pengadaan_bahan_baku/{id}', [controller_pengadaan_bahan_baku::class, 'deletePengadaanBahanBaku']);
        Route::get('pengadaan_bahan_baku', [controller_pengadaan_bahan_baku::class, 'readPengadaanBahanBaku']);
        Route::get('pengadaan_bahan_baku/{id}', [controller_pengadaan_bahan_baku::class, 'readPengadaanBahanBakuByID']);


        Route::get('presensi', [controller_presensi::class, 'ReadAllPresensi']);
        Route::get('presensi/{date}', [controller_presensi::class, 'ReadByDate']);
        Route::put('presensi/{id}', [controller_presensi::class, 'ChangeStatusToTidakHadir']);

        Route::post('penitip', [controller_penitip::class, 'createPenitip']);
        Route::delete('penitip/{id_penitip}', [controller_penitip::class, 'deletePenitip']);
        Route::put('penitip/{id_penitip}', [controller_penitip::class, 'updatePenitip']);
        Route::get('penitip', [controller_penitip::class, 'readPenitip']);
        Route::get('penitip/{id_penitip}', [controller_penitip::class, 'getById']);
        Route::get('penitip_nama/{nama}', [controller_penitip::class, 'getByNama']);

        Route::post('pengeluaran', [controller_pengeluaran::class, 'createPengeluaran']);
        Route::delete('pengeluaran/{id_pengeluaran}', [controller_pengeluaran::class, 'deletePengeluaran']);
        Route::put('pengeluaran/{id_pengeluaran}', [controller_pengeluaran::class, 'updatePengeluaran']);
        Route::get('pengeluaran', [controller_pengeluaran::class, 'readPengeluaran']);
        Route::get('pengeluaran/{id_pengeluaran}', [controller_pengeluaran::class, 'getById']);
        Route::get('pengeluaran_nama/{nama}', [controller_pengeluaran::class, 'getByNama']);

        Route::post('karyawan', [controller_karyawan::class, 'createkaryawan']);
        Route::delete('karyawan/{id_karyawan}', [controller_karyawan::class, 'deletekaryawan']);
        Route::get('karyawan', [controller_karyawan::class, 'readkaryawan']);
        Route::get('karyawan/{id_karyawan}', [controller_karyawan::class, 'getById']);
    });

    Route::group(['middleware' => ['can:isMOorAdmin']], function () {
        Route::get('bahan_baku', [controller_bahan_baku::class, 'readBahanBaku']);
    });
    Route::get('Tanggal_Lahir_Customer/{Email}', [controller_customer::class, 'getTanggalLahirPerCustomer']);

    // get, put karyawan pindah ke luar middleware karena semua role karyawan bisa update password
    Route::put('karyawan/{id_karyawan}', [controller_karyawan::class, 'updatekaryawan']);
    Route::get('karyawan_nama/{nama}', [controller_karyawan::class, 'getByNama']);

    Route::put('password_karyawan/{id_karyawan}', [controller_karyawan::class, 'updatePasswordKaryawan']);

    Route::get('penitip', [controller_penitip::class, 'ReadPenitip']);
    Route::get('poin/{email}', [controller_promo_poin::class, 'getPointPerCustomer']);
    Route::get('latestNota/{month}', [controller_pesanan::class, 'getLatestPesanan']);
    Route::get('generateNoNota/{month}', [controller_pesanan::class, 'generateNoNota']);
    Route::post('pesanProduk', [controller_pesanan::class, 'PesanProduk']);
    Route::post('AddDetailPemesanan', [controller_detail_pemesanan::class, 'addDetailPemesananProduk']);

    Route::post('customers', [controller_customer::class, 'registerCustomer']);
    Route::put('customerss/{email_customer}', [controller_customer::class, 'updatecustomer']);
    Route::get('customers', [controller_customer::class, 'readcustomer']);
    Route::get('customers/{email_customer}', [controller_customer::class, 'getHistoryByEmail']);
    Route::get('customers_nama/{nama}', [controller_customer::class, 'getByNama']);
    Route::get('customers_email/{email}', [controller_customer::class, 'getCustomerByEmail']);
});

// transaksi no 72
Route::get('produkNonPenitipWithKuota/{date}', [controller_produk::class, 'getProdukNonPenitipWithKuota']);
Route::get('produkKuota/{id}/{date}', [controller_produk::class, 'getProdukKuota']);
Route::get('ProdukPenitip', [controller_produk::class, 'getProdukPenitip']);
Route::get('getProdukByIdWithQuota/{Id}/{date}', [controller_transaksi_pesanan::class, 'getProdukByIdWithQuota']);
Route::get('kategori', [controller_kategori::class, 'ReadKategori']);
Route::post('generate_resep', [controller_resep::class, 'generateResepAllProduk']);
Route::get('getHampersWithProdukAndKuota/{date}', [controller_hampers::class, 'getHamperandProdukwithKuota']);
Route::get('getProdukInHampersWithKuota/{id}/{date}', [controller_produk::class, 'getHampersProdukAndKuota']);
Route::get('getHampersByIdWithKuota/{id}/{date}', [controller_hampers::class, 'getHampersByIdWithKuota']);
Route::get('getKuotaHampersById/{id}/{date}', [controller_hampers::class, 'getKuotaHampersById']);
Route::post('AutomaticPresensi', [controller_presensi::class, 'AutomaticPresensi']);
