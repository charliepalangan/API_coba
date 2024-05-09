<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_pengadaan_bahan_baku extends FormRequest
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
            "Satuan" => ["required", "string"],
            "Qty" => ["required", "numeric", "min:0", "gte:0"],
            "Harga" => ["required", "numeric", "min:0", "gte:0"],
            "BahanBaku_Id" => ["required", "numeric"],
            "Tanggal_Pengadaan" => ["required", "date"],
        ];
    }

    public function messages(): array
    {
        return [
            "Satuan.required" => "Satuan tidak boleh kosong",
            "Qty.required" => "Qty tidak boleh kosong",
            "Qty.min" => "Stok tidak boleh negatif",
            "Harga.required" => "Harga tidak boleh kosong",
            "Harga.min" => "Harga tidak boleh negatif",
            "BahanBaku_Id.required" => "Bahan Baku Id tidak boleh kosong",
            "Tanggal_Pengadaan.required" => "Tanggal Pengadaan tidak boleh kosong",
            "Satuan.string" => "Satuan harus berupa string",
            "Qty.numeric" => "Qty harus berupa angka",
            "Harga.numeric" => "Harga harus berupa angka",
            "BahanBaku_Id.numeric" => "Bahan Baku Id harus berupa angka",
            "Tanggal_Pengadaan.date" => "Tanggal Pengadaan harus berupa tanggal",
            "Qty.gte" => "Qty tidak boleh negatif",
            "Harga.gte" => "Harga tidak boleh negatif",
        ];

    }
}
