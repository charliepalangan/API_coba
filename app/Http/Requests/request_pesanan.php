<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_pesanan extends FormRequest
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
            "Id" => ['required', 'string'],
            "Total" => ['required', 'numeric'],
            "Customer_Email" => ['required', 'string'],
            "Tanggal_Pesan" => ['required', 'String'],
            "Tanggal_Diambil" => ['required', 'String'],
            "Poin_Didapat" => ['numeric'],
        ];
    }

    public function messages(): array
    {
        return [
            'Id.required' => 'Id is required!',
            'Total.required' => 'Total is required!',
            'Customer_Email.required' => 'Customer Email is required!',
            'Tanggal_Pesan.required' => 'Tanggal Pesan is required!',
            'Tanggal_Diambil.required' => 'Tanggal Diambil is required!',
            'Poin_Didapat.numeric' => 'Poin Didapat must be a number!',
        ];
    }
}
