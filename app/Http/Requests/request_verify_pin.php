<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_verify_pin extends FormRequest
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
            'email' => ['required', 'email'],
            'token' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "Email tidak boleh kosong",
            "email.email" => "Email tidak valid",
            "token.required" => "OTP tidak boleh kosong"
        ];

    }
}
