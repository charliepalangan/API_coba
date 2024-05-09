<?php

namespace App\Services;

use App\Models\model_penitip;

/**
 * Class PenitipService
 */
class service_penitip
{
    /**
     * Menghasilkan ID penitip dengan format PenitipXX.
     *
     * @return string
     */
    public function generateId(): string
    {
        
        $lastPenitip = model_penitip::orderBy('Id', 'desc')->first();

        if ($lastPenitip) {
            $lastNumber = (int) substr($lastPenitip->Id, 7);
        } else {
            $lastNumber = 0; //First Add
        }


        $newNumber = $lastNumber + 1;
        $newId = 'Penitip' . sprintf('%02d', $newNumber);

        return $newId;
    }
}
