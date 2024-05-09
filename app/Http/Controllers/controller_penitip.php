<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_penitip;
use App\Http\Resources\resource_penitip;
use App\Services\PenitipService;
use Illuminate\Http\Request;
use App\Models\model_penitip;
use App\Services\service_penitip;

class controller_penitip extends Controller
{
    private service_penitip $penitipService;

    public function __construct(service_penitip $penitipService)
    {
        $this->penitipService = $penitipService;
    }
    public function createPenitip(request_penitip $request)
    {
      
        $newId = $this->penitipService->generateId();

       
        $penitipData = array_merge($request->validated(), ['Id' => $newId, 'komisi' => 0]);

    
        $penitip = model_penitip::create($penitipData);


        return new resource_penitip($penitip);
    }
    
    public function updatePenitip(request_penitip $request, $id)
    {
        try {
            $penitip = model_penitip::findOrFail($id);
            $validated = $request->validated();


            $penitip->update($validated);
            return new resource_penitip($penitip);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Penitip dengan Id ' . $id . ' tidak ditemukan',
            ], 404);
        }
    }
    
    
    public function ReadPenitip(){
        $penitip = model_penitip::all();
        return resource_penitip::collection($penitip);
    }


    public function deletePenitip(string $id)
    {
        try {
            $penitip = model_penitip::findOrFail($id);

            $penitip->delete();

            return response()->json([
                'message' => 'Penitip dengan Id ' . $id . ' berhasil dihapus.',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Penitip dengan Id ' . $id . ' tidak ditemukan',
            ], 404);
        }
    }

    public function getById(string $id)
    {
        $penitip = model_penitip::where('email', $id)->first();
        
        if (!$penitip) {
            return response()->json([
                'message' => "Penitip dengan ID $id tidak ditemukan."
            ], 404);
        }
    
        return new resource_penitip($penitip);
    }
    
    public function getByNama(string $name)
    {
        $penitip = model_penitip::where('Nama', $name)->first();
        
        if (!$penitip) {
            return response()->json([
                'message' => "Penitip dengan nama '$name' tidak ditemukan."
            ], 404);
        }
    
        return new resource_penitip($penitip);
    }
}
