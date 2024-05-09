<?php

namespace App\Services;

use App\Models\model_customer;


class service_customer
{
    public function getTanggalLahirByEmail(String $Email): String
    {
        try {
            $customer = model_customer::find($Email);
            return $customer->Tanggal_Lahir;
        } catch (\Exception $e) {
            return "";
        }
    }
}
