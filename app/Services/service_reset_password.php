<?php

namespace App\Services;

use App\Http\Requests\request_reset_password;
use App\Models\model_customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

/**
 * Class service_reset_password.
 */
class service_reset_password
{
    public function resetPassword(request_reset_password $request) {        
       

        $user = model_customer::where('Email',$request->email);

        $user->update([
            'password'=>Hash::make($request->password)
        ]);
    
        $token = $user->first()->createToken('myapptoken')->plainTextToken;
    
        return new JsonResponse(
            [
                'success' => true, 
                'message' => "Password Anda sudah terganti!", 
                'token'=>$token
            ], 
            200
        );
    }
}
