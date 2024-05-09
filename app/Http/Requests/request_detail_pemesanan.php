<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_detail_pemesanan extends FormRequest
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
            "SubTotal" => ['required', 'numeric'],
            "Total_Produk" => ['required', 'numeric'],
            "Pesanan_Id" => ['required', 'string'],
            "Produk_Id" => ['integer'],
            "Hampers_Id" => ['integer'],
        ];
    }
}
