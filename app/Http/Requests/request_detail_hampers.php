<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_detail_hampers extends FormRequest
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
            "Produk_Id" => "required",
            "Hampers_Id" => "required",
            "Jumlah" => "required|numeric|min:0|gte:0",
        ];
    }

    public function messages(): array
    {
        return [
            "Produk_Id.required" => "Produk Id tidak boleh kosong",
            "Hampers_Id.required" => "Hampers Id tidak boleh kosong",
            "Jumlah.required" => "Jumlah tidak boleh kosong",
            "Jumlah.min" => "Jumlah tidak boleh negatif",
            "Jumlah.gte" => "Jumlah tidak boleh negatif",
        ];
    }
}
