<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_karyawan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // Ini bikin error waktu update Gaji Karyawan, karena harus input Nama Password dan Role Id dan variabel penampungnya beda dgn yang di model karyawan
            // "Nama" => ["required", "string"],
            // "Password" => ["required", "string"],
            // "Total_Gaji" => ["numeric"],
            // "Bonus" => ["numeric"],
            // "Role_id" => ["required"],
        ];
    }

    public function messages(): array
    {
        return [
            "Nama.required" => "Nama tidak boleh kosong",
            "password.string" => "Password tidak boleh kosong",
            "Total_Gaji.numeric" => "Total Gaji harus berupa numeric",
            "Bonus.numeric" => "Bonus harus berupa numeric",
            "Role_id.required" => "Role Id Karyawan harus diisi",
        ];

    }
}
