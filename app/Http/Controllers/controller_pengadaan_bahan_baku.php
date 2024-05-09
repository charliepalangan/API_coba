<?php

namespace App\Http\Controllers;

use App\Models\model_pengadaan_bahan_baku;
use App\Http\Resources\resource_pengadaan_bahan_baku;
use App\Http\Requests\request_pengadaan_bahan_baku;
use App\Models\model_bahan_baku;
use App\Services\service_pengadaan_bahan_baku;
use App\Http\Controllers\controller_bahan_baku;

use Illuminate\Http\Request;

class controller_pengadaan_bahan_baku extends Controller
{
    private service_pengadaan_bahan_baku $service_pengadaan_bahan_baku;
    private controller_bahan_baku $controller_bahan_baku;

    public function __construct(service_pengadaan_bahan_baku $service_pengadaan_bahan_baku, controller_bahan_baku $controller_bahan_baku)
    {
        $this->service_pengadaan_bahan_baku = $service_pengadaan_bahan_baku;
        $this->controller_bahan_baku = $controller_bahan_baku;
    }
    public function createPengadaanBahanBaku(request_pengadaan_bahan_baku $request)
    {
        try {
            $request_val = $request->validated();
            $pengadaan_bahan_baku = model_pengadaan_bahan_baku::create($request_val);

            $jumlahStok = $this->service_pengadaan_bahan_baku->getJumlahQtyBahanBaku($request_val['BahanBaku_Id']);
            $TotalUpdateStok = $jumlahStok->Qty + $request_val['Qty'];
            $this->service_pengadaan_bahan_baku->updateQtyBahanBaku($request_val['BahanBaku_Id'], $TotalUpdateStok);

            return new resource_pengadaan_bahan_baku($pengadaan_bahan_baku);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function readPengadaanBahanBakuByID($id)
    {
        try {
            $pengadaan_bahan_baku = $this->service_pengadaan_bahan_baku->getDetailPengadaanByID($id);
            return response()->json($pengadaan_bahan_baku, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function readPengadaanBahanBaku()
    {
        $pengadaan_bahan_baku = $this->service_pengadaan_bahan_baku->getDetailPengadaan();
        return resource_pengadaan_bahan_baku::collection($pengadaan_bahan_baku);
    }


    public function updatePengadaanBahanBaku(request_pengadaan_bahan_baku $request, $id)
    {
        try {
            $pengadaan_bahan_baku = model_pengadaan_bahan_baku::findOrFail($id);

            $jumlahStok = $this->service_pengadaan_bahan_baku->getJumlahQtyBahanBaku($pengadaan_bahan_baku->BahanBaku_Id);
            $request_val = $request->validated();
            $TotalUpdateStok = $jumlahStok->Qty - $pengadaan_bahan_baku->Qty + $request_val['Qty'];
            $this->service_pengadaan_bahan_baku->updateQtyBahanBaku($pengadaan_bahan_baku->BahanBaku_Id, $TotalUpdateStok);
            $pengadaan_bahan_baku->update($request_val);
            return new resource_pengadaan_bahan_baku($pengadaan_bahan_baku);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function deletePengadaanBahanBaku($id)
    {
        try {
            $pengadaan_bahan_baku = model_pengadaan_bahan_baku::findOrFail($id);
            $pengadaan_bahan_baku->delete();
            return response()->json(['message' => 'Data Deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }
}
