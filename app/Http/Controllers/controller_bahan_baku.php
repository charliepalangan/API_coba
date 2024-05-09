<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_bahan_baku;
use Illuminate\Http\Request;
use App\Models\model_bahan_baku;
use App\Models\model_pengadaan_bahan_baku;
use App\Http\Resources\resource_bahan_baku;
use App\Services\service_bahan_baku;

class controller_bahan_baku extends Controller
{
  
    public function createBahanBaku(request_bahan_baku $request)
    {
        $validated = $request->validated();

        $bahanBaku = model_bahan_baku::create($validated);
        return new resource_bahan_baku($bahanBaku);
    }
    
    public function updateBahanBaku(request_bahan_baku $request, $id)
    {
        try {
            $bahanBaku = model_bahan_baku::findOrFail($id);
            $validated = $request->validated();


            $bahanBaku->update($validated);
            return new resource_bahan_baku($bahanBaku);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Bahan Baku dengan Id ' . $id . ' tidak ditemukan',
            ], 404);
        }
    }
    
    public function readBahanBaku()
    {
        $bahan_baku = model_bahan_baku::where('is_deleted', 0)->get();
        return resource_bahan_baku::collection($bahan_baku);
    }

    public function deleteBahanBaku(int $id)
{
    try {

        $bahanBaku = model_bahan_baku::findOrFail($id);

        $isUsedInPengadaan = model_pengadaan_bahan_baku::where('BahanBaku_Id', $id)->exists();

        if ($isUsedInPengadaan) {
            $bahanBaku->update(['is_deleted' => 1]);
        } else {
            $bahanBaku->delete();
        }

        return response()->json([
            'message' => 'Bahan Baku dengan Id ' . $id . ' berhasil dihapus.',
        ]);

    } catch (\Throwable $th) {
        return response()->json([
            'message' => 'Bahan Baku dengan Id ' . $id . ' tidak ditemukan',
        ], 404);
    }
}

    




    public function getById(int $id)
    {
        $bahanBaku = model_bahan_baku::where('Id', $id)->first();
        
        if (!$bahanBaku) {
            return response()->json([
                'message' => "Bahan baku dengan ID $id tidak ditemukan."
            ], 404);
        }
    
        return new resource_bahan_baku($bahanBaku);
    }
    
    public function getByNama(string $name)
    {
        $bahanBaku = model_bahan_baku::where('Nama', $name)->first();
        
        if (!$bahanBaku) {
            return response()->json([
                'message' => "Bahan baku dengan nama '$name' tidak ditemukan."
            ], 404);
        }
    
        return new resource_bahan_baku($bahanBaku);
    }
    
}
