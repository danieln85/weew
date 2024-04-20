<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserProfileRequest extends FormRequest
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
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'id_number' => 'required|numeric',
            'comments' => 'nullable|string',
            'mobile_number' => 'required|digits:10',
            'email_fac' => [
                'required',
                'email',
                'regex:/^.+@.+\..+$/' // Utiliza la regla regex directamente en la cadena de reglas de validación
            ],
            'name_fac' => 'required|string|max:255',
        ];
    }
}
