<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_produk extends FormRequest
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
            "Nama" => ["required", "string"],
            "Harga" => ["required", "min:0", "gte:0"],
            "Stok" => ["required", "min:0", "gte:0"],
            "Satuan" => ["required", "string"],
            "Kategori_Id" => ["required"],
            "Penitip_Id" => ["string", "nullable"],
            "Gambar" => ["nullable"],
        ];
    }

    public function messages(): array
    {
        return [
            "Nama.required" => "Nama produk harus diisi",
            "Harga.required" => "Harga produk harus diisi",
            "Harga.min" => "Harga produk tidak boleh negatif",
            "Satuan.required" => "Satuan produk harus diisi",
            "Satuan.min" => "Satuan produk tidak boleh negatif",
            "Stok.required" => "Stok produk harus diisi",
            "Penitip_Id.string" => "Penitip harus berupa string",
            "Kategori_Id.required" => "Kategori produk harus diisi",
            "Stok.gte" => "Stok produk tidak boleh negatif",
            "Harga.gte" => "Harga produk tidak boleh negatif",
        ];
    }
}
