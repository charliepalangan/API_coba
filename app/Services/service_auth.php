<?php

namespace App\Services;

use App\Http\Resources\resource_login;
use Illuminate\Http\Request;
use App\Models\model_customer;
use Illuminate\Support\Facades\Hash;
use App\Models\model_karyawan;
use Illuminate\Support\Facades\DB;

class service_auth
{
    public function login_customer(Request $request)
    {
        $request->validate([
            'Email' => 'required',
            'Password' => 'required'
        ]);

        $user = model_customer::where('Email', $request->Email)->first();

        if (!$user || !Hash::check($request->Password, $user->Password)) {
            return response()->json([
                'message' => 'Email atau Password salah'
            ], 401);
        }

        $token = $user->createToken('token-name')->plainTextToken;
        $Total_Poin = $user->Total_Poin;

        return new resource_login($user, $token, null, $Total_Poin);
    }

    public function login_karyawan(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'Password' => 'required'
        ]);

        $karyawan = model_karyawan::where('Nama', $request->Nama)->first();

        if (!$karyawan || !Hash::check($request->Password, $karyawan->Password)) {
            return response()->json([
                'message' => 'Nama atau Password salah'
            ], 401);
        }

        $role = DB::table('role')->where('Id', $karyawan->Role_Id)->first();

        $token = $karyawan->createToken('token-name')->plainTextToken;

        return new resource_login($karyawan, $token, $role->Nama);
    }


    public function isCustomer(Request $request): bool
    {
        return $request->Email != null;
    }
}
