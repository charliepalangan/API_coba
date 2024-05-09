<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_presensi extends FormRequest
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
            "Tanggal" => ["required", "date"],
            "Karyawan_Id" => ["required"],
            "Status" => ["required"],
        ];
    }

    public function messages(): array
    {
        return [
            "Tanggal.required" => "Tanggal tidak boleh kosong",
            "Role_id.required" => "Karyawan Id harus diisi",
            "Status.required" => "Status harus di isi",
        ];

    }
}
