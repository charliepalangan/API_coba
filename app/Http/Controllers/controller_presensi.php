<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_presensi;
use App\Http\Resources\resource_presensi;
use App\Services\service_presensi;
use PhpParser\Node\Expr\Cast\String_;

class controller_presensi extends Controller
{
    private service_presensi $service_presensi;

    public function __construct(service_presensi $service_presensi)
    {
        $this->service_presensi = $service_presensi;
    }

    public function ReadAllPresensi()
    {
        $data = $this->service_presensi->GetAllPresensi();
        return resource_presensi::collection($data);
    }

    public function ReadByDate(String $date)
    {
        $data = $this->service_presensi->GetPresensiByDate($date);
        return resource_presensi::collection($data);
    }

    public function ChangeStatusToTidakHadir(int $id)
    {
        $this->service_presensi->ChangeStatusToTidakHadir($id);
        return new resource_presensi(model_presensi::find($id));
    }


    public function AutomaticPresensi()
    {

        if ($this->service_presensi->AutomaticPresesiIsExecuted()) {
            return response()->json([
                'message' => 'Presensi otomatis sudah Pernah dijalankan.'
            ]);
        } else {
            $this->service_presensi->AutomaticPresensi();
            return response()->json([
                'message' => 'Presensi otomatis berhasil dijalankan.'
            ]);
        }
    }
}
