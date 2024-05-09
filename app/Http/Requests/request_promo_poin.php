<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_promo_poin extends FormRequest
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
            'Nama' => 'required',
            'Poin' => 'required',
            'isDoublePoint' => 'required | boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'Nama.required' => 'Nama is required',
            'Poin.required' => 'Poin is required',
            'isDoublePoint.boolean' => 'isDoublePoint must be a 0 or 1',
            'isDoublePoint.required' => "isDoublePoint is required"
        ];
    }
}
