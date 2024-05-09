<?php

namespace App\Services;

use App\Models\model_presensi;
use App\Models\model_karyawan;
use Carbon\Carbon;

class service_presensi
{

    public function GetAllPresensi()
    {
        $presensi = model_presensi::select(
            'presensi.Id',
            'presensi.Tanggal',
            'karyawan.Nama as Nama_Karyawan',
            'presensi.Status',
            'karyawan.Id as Karyawan_Id'
        )->join('karyawan', 'presensi.Karyawan_Id', '=', 'karyawan.Id')
            ->get();

        return $presensi;
    }

    public function GetPresensiByDate(String $date)
    {
        $presensi = model_presensi::select(
            'presensi.Id',
            'presensi.Tanggal',
            'karyawan.Nama as Nama_Karyawan',
            'presensi.Status',
            'karyawan.Id as Karyawan_Id'
        )->join('karyawan', 'presensi.Karyawan_Id', '=', 'karyawan.Id')
            ->where('presensi.Tanggal', $date)
            ->get();

        return $presensi;
    }

    public function ChangeStatusToTidakHadir(int $id)
    {
        $presensi = model_presensi::find($id);
        $presensi->Status = 'Tidak_Masuk';
        $presensi->save();
    }


    public function getAllKaryawan()
    {
        $karyawan = model_karyawan::all();
        return $karyawan;
    }

    public function AutomaticPresensi()
    {
        $karyawan = $this->getAllKaryawan();

        $date = Carbon::now()->format('Y-m-d');

        if (model_presensi::where('Tanggal', $date)->count() > 0) {
            return null;
        } else {
            foreach ($karyawan as $k) {
                $presensi = new model_presensi();
                $presensi->Karyawan_Id = $k->Id;
                $presensi->Tanggal = $date;
                $presensi->Status = 'Masuk';
                $presensi->save();
            }
            return $presensi;
        }
    }

    public function AutomaticPresesiIsExecuted()
    {
        $date = Carbon::now()->format('Y-m-d');
        if (model_presensi::where('Tanggal', $date)->count() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
