<?php

namespace App\Services;

use App\Http\Requests\request_forgot_password;
use App\Http\Requests\request_verify_pin;
use App\Mail\ResetPassword;
use App\Models\model_customer;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;

/**
 * Class service_forgot_password.
 */
class service_forgot_password
{
    public function forgotPassword(request_forgot_password $request) {

        $verify = model_customer::where('Email', $request->all()['email'])->exists();
    
        if ($verify) {
            $verify2 =  DB::table('password_reset_tokens')->where([
                ['email', $request->all()['email']]
            ]);
    
            if ($verify2->exists()) {
                $verify2->delete();
            }
    
            $token = random_int(100000, 999999);
            $password_reset = DB::table('password_reset_tokens')->insert([
                'email' => $request->all()['email'],
                'token' =>  $token,
                'created_at' => Carbon::now()
            ]);
    
            if ($password_reset) {

                Mail::to($request->all()['email'])->send(new ResetPassword($token));
    
                return new JsonResponse(
                    [
                        'success' => true, 
                        'message' => "Silahkan cek email Anda untuk 6 digit OTP"
                    ], 
                    200
                );
            }

        } else {
            return new JsonResponse(
                [
                    'success' => false, 
                    'message' => "Email ini tidak terdaftar!"
                ], 
                400
            );
        }
    }

    public function verifyPin(request_verify_pin $request) {


        $check = DB::table('password_reset_tokens')->where([
            ['email', $request->all()['email']],
            ['token', $request->all()['token']],
        ]);

    if ($check->exists()) {

        $difference = Carbon::now()->diffInSeconds($check->first()->created_at);
        
        if ($difference > 3600) {
            return new JsonResponse(['success' => false, 'message' => "OTP Expired"], 400);
        }

        DB::table('password_reset_tokens')->where([
            ['email', $request->all()['email']],
            ['token', $request->all()['token']],
        ])->delete();

        return new JsonResponse(
            [
                'success' => true, 
                'message' => "Anda sekarang bisa mengganti password Anda!"
            ], 
            200
            );
    } else {
        return new JsonResponse(
            [
                'success' => false, 
                'message' => "OTP salah!"
            ], 
            401
        );
    }
}

}
