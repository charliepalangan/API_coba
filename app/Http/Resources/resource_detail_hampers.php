<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\model_detail_hampers as detail_hampers;
use App\Models\model_produk;
use App\Models\model_hampers;

class resource_detail_hampers extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    private model_produk $produk;
    private model_hampers $hampers;


    public function __construct(model_produk $produk, model_hampers $hampers, detail_hampers $detail_hampers)
    {
        parent::__construct($detail_hampers);
        $this->produk = $produk;
        $this->hampers = $hampers;

    }

    public function toArray(Request $request): array
    {
        return [
            "Produk" => $this->produk->Nama,
            "Hampers" => $this->hampers->Nama_Hampers,
        ];
    }
}
