<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_reset_password extends FormRequest
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
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }


    public function messages(): array
    {
        return [
            "email.required" => "Email tidak boleh kosong",
            "email.string" => "Email harus berupa string",
            "email.email" => "Email tidak valid",
            "password.required" => "Password tidak boleh kosong",
            "password.string" => "Password harus berupa string",
            "password.min" => "Password harus berisi minimal 8 karakter",
            "password.confirmed" => "Confirmed Password tidak sama",
        ];

    }
}
