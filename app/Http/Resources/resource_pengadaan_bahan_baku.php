<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class resource_pengadaan_bahan_baku extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */



    public function __construct($resource)
    {
        parent::__construct($resource);

    }




    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
