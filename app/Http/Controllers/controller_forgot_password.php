<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_forgot_password;
use App\Http\Requests\request_verify_pin;
use App\Services\service_forgot_password;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class controller_forgot_password extends Controller
{

    
    private service_forgot_password $service;
    
    public function __construct(service_forgot_password $service)
    {
        $this->service = $service;
    }

    public function forgotPassword(request_forgot_password $request) {

        $response = $this->service->forgotPassword($request);

        return $response;

    }

    public function verifyPin(request_verify_pin $request){

        $response = $this->service->verifyPin($request);

        return $response;

    }

}
