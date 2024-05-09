<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_reset_password;
use App\Models\model_customer;
use App\Services\service_reset_password;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class controller_reset_password extends Controller
{

    private service_reset_password $service;
    
    public function __construct(service_reset_password $service)
    {
        $this->service = $service;
    }
    public function resetPassword(request_reset_password $request) {    
   
        $response = $this->service->resetPassword($request);

        return $response;
              
    }

}
