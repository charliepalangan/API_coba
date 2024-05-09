<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_pengeluaran_lain_lain;
use App\Models\model_pengeluaran_lain_lain;
use App\Http\Resources\resource_pengeluaran_lain_lain;


class controller_pengeluaran extends Controller
{
   
    public function createPengeluaran(request_pengeluaran_lain_lain $request)
    {
        $validated = $request->validated();

        $pengeluaran = model_pengeluaran_lain_lain::create($validated);
        return new resource_pengeluaran_lain_lain($pengeluaran);
    }
    
    public function updatePengeluaran(request_pengeluaran_lain_lain $request, $id)
    {
        try {
            $pengeluaran = model_pengeluaran_lain_lain::findOrFail($id);
            $validated = $request->validated();

            $pengeluaran->update($validated);
            return new resource_pengeluaran_lain_lain($pengeluaran);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Pengeluaran dengan Id ' . $id . ' tidak ditemukan',
            ], 404);
        }
    }
    
    public function readPengeluaran()
    {
        $pengeluaran = model_pengeluaran_lain_lain::all();
        return resource_pengeluaran_lain_lain::collection($pengeluaran);
    }

    public function deletePengeluaran(int $id)
    {
        try {
            $pengeluaran = model_pengeluaran_lain_lain::findOrFail($id);

            $pengeluaran->delete();

            return response()->json([
                'message' => 'Pengeluaran dengan Id ' . $id . ' berhasil dihapus.',
            ]);

        
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Pengeluaran dengan Id ' . $id . ' tidak ditemukan',
            ], 404);
        }
    }

    public function getById(int $id)
    {
        $pengeluaran = model_pengeluaran_lain_lain::where('Id', $id)->first();
        
        if (!$pengeluaran) {
            return response()->json([
                'message' => "Pengeluaran dengan ID $id tidak ditemukan."
            ], 404);
        }
    
        return new resource_pengeluaran_lain_lain($pengeluaran);
    }
    
    public function getByNama(string $name)
    {
        $pengeluaran = model_pengeluaran_lain_lain::where('Nama', $name)->first();
        
        if (!$pengeluaran) {
            return response()->json([
                'message' => "Pengeluaran dengan nama '$name' tidak ditemukan."
            ], 404);
        }
    
        return new resource_pengeluaran_lain_lain($pengeluaran);
    }
}
