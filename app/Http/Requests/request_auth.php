<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_auth extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    protected $isRegistration = false;
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
        $rules = [
            'Email' => 'required',
            'Password' => 'required',
            'Nama' => 'string|max:255'
        ];



        if ($this->isRegistration()) {
            $rules['Nama'] .= 'required';

        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'Email.required' => 'Email is required',
            'Password.required' => 'Password is required',
            'Password.min' => 'Password must be at least 6 characters',
            'Nama.required' => 'Name is required',
            'Nama.string' => 'Name must be a string',
            'Nama.max' => 'Name must not be more than 255 characters'
        ];
    }

    public function setIsRegistration(bool $isRegistration): void
    {
        $this->isRegistration = $isRegistration;
    }

    public function isRegistration(): bool
    {
        return $this->isRegistration;
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->isRegistration() && $this->input('Password') !== $this->input('Password_confirmation')) {
                $validator->errors()->add('Password', 'Password confirmation does not match');
            }
        });
    }


}
