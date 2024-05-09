<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_hampers extends FormRequest
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
            'Nama_Hampers' => ['required', 'string'],
            'Harga' => ['required', 'numeric', 'min:0', 'gte:0'],
            'Gambar' => ['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'Nama_Hampers.required' => 'Nama hampers harus diisi',
            'Nama_Hampers.string' => 'Nama hampers harus berupa string',
            'Harga.required' => 'Harga harus diisi',
            'Harga.numeric' => 'Harga harus berupa angka',
            'Harga.min' => 'Harga tidak boleh negatif',
            'Gambar.mimes' => 'Gambar harus berupa file dengan ekstensi png, jpg, atau jpeg',
            'Harga.gte' => 'Harga tidak boleh negatif',
        ];
    }
}

