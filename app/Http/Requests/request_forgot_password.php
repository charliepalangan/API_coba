<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_forgot_password extends FormRequest
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
        ];
    }

    public function messages(): array
    {
        return [
            "email.required" => "Email tidak boleh kosong",
            "email.string" => "Email harus berupa string",
            "email.email" => "Email tidak valid",
        ];

    }

}
