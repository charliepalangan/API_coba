<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_pengeluaran_lain_lain extends FormRequest
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
            "Nama_Pengeluaran" => ["required", "string"],
            "Harga" => ["required", "numeric", "min:0", "gte:0"],
            "Qty" => ["required", "numeric", "min:0", "gte:0"],
            "Satuan" => ["required", "string"],
        ];
    }

    public function messages(): array
    {
        return [
            "Nama_Pengeluaran.required" => "Nama tidak boleh kosong",
            "Harga.required" => "Harga tidak boleh kosong",
            "Qty.required" => "Qty tidak boleh kosong",
            "Qty.min" => "Qty tidak boleh negatif",
            "Satuan.required" => "Satuan tidak boleh kosong",
            "Nama_Pengeluaran.string" => "Nama harus berupa string",
            "Harga.numeric" => "Harga harus berupa angka",
            "Harga.min" => "Harga tidak boleh negatif",
            "Qty.numeric" => "Qty harus berupa angka",
            "Satuan.string" => "Satuan harus berupa string",
            "Qty.gte" => "Qty tidak boleh negatif",
            "Harga.gte" => "Harga tidak boleh negatif",
        ];

    }
}
