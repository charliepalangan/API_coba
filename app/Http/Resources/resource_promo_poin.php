<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class resource_promo_poin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    private $isDeleted = false;
    public function toArray(Request $request): array
    {
        if ($this->isDeleted) {
            return [
                'message' => 'Promo poin dengan Nama ' . $this->Nama . ' berhasil dihapus',
            ];
        } else {
            return [
                'Nama' => $this->Nama,
                'Poin' => $this->Poin,
                'isDoublePoint' => $this->isDoublePoint,
            ];
        }
    }

    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }
}
