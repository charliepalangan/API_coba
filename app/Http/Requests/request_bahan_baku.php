<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_bahan_baku extends FormRequest
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
            "Qty" => ["required", "numeric","min:0","gte:0"],
            "Satuan" => ["required", "string"],
        ];
    }

    public function messages(): array
    {
        return [
            "Nama.required" => "Nama tidak boleh kosong",
            "Qty.required" => "Stok tidak boleh kosong",
            "Qty.min" => "Stok tidak boleh negatif",
            "Satuan.required" => "Satuan tidak boleh kosong",
            "Nama.string" => "Nama harus berupa string",
            "Qty.numeric" => "Stok harus berupa angka",
            "Satuan.string" => "Satuan harus berupa string",
            "Qty.gte" => "Stok tidak boleh negatif",
        ];

    }
}
