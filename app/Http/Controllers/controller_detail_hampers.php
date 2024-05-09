<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_detail_hampers;
use App\Http\Resources\resource_detail_hampers;
use Illuminate\Http\Request;
use App\Models\model_detail_hampers;
use App\Models\model_produk;
use App\Models\model_hampers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\service_hampers;

class controller_detail_hampers extends Controller
{
    protected service_hampers $service_hampers;

    public function __construct(service_hampers $service_hampers)
    {
        $this->service_hampers = $service_hampers;
    }
    public function addProdukToHampers(request_detail_hampers $request)
    {
        try {
            $request_val = $request->validated();

            $produk = model_produk::findOrFail($request_val['Produk_Id']);

            $hampers = model_hampers::findOrFail($request_val['Hampers_Id']);

            $detail_hampers = model_detail_hampers::create([
                'Produk_Id' => $produk->Id,
                'Hampers_Id' => $hampers->Id,
                'Jumlah' => $request_val['Jumlah']
            ]);

            return new resource_detail_hampers($produk, $hampers, $detail_hampers);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }

    }

    public function deleteProdukFromHampers($id_hampers, $id_produk)
    {
        try {
            $this->service_hampers->findHampers($id_hampers, $id_produk);
            $this->service_hampers->deleteHampers($id_hampers, $id_produk);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function updateProdukFromHampers(request_detail_hampers $request, $id_hampers, $id_produk)
    {
        try {
            $this->service_hampers->findHampers($id_hampers, $id_produk);
            $request_val = $request->validated();
            $this->service_hampers->updateHampers($request_val, $id_hampers, $id_produk);
            return response()->json(['message' => 'Data Updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function getProdukFromHampers($id)
    {
        try {
           $produk = $this->service_hampers->getProduct($id);
           return response()->json($produk, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => "Hampers Not Found"], 404);
        }
    }



}
