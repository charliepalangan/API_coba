<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\model_produk;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class service_hampers
{


    public function findHampers($id_hampers, $id_produk)
    {
        $detail_hampers = DB::table('detail_hampers')
            ->where('Hampers_Id', $id_hampers)
            ->where('Produk_Id', $id_produk)
            ->first();
        if ($detail_hampers == null) {
            throw new NotFoundHttpException('Data Not Found');
        }
        return $detail_hampers;
    }

    public function deleteHampers($id_hampers, $id_produk)
    {
        DB::table('detail_hampers')
            ->where('Hampers_Id', $id_hampers)
            ->where('Produk_Id', $id_produk)
            ->delete();
        return response()->json(['message' => 'Data Deleted'], 200);
    }

    public function updateHampers($request, $id_hampers, $id_produk): void
    {
        DB::table('detail_hampers')
            ->where('Hampers_Id', $id_hampers)
            ->where('Produk_Id', $id_produk)
            ->update($request);
    }

    public function getProduct($id): object
    {
        $produk = model_produk::join('detail_hampers', 'produk.Id', '=', 'detail_hampers.Produk_Id')
            ->where('Hampers_Id', $id)
            ->get();

        return $produk;
    }


}
