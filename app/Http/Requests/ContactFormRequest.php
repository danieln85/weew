<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => [
                'required',
                'email',
                'regex:/^.+@.+\..+$/' // Utiliza la regla regex directamente en la cadena de reglas de validación
            ],
            'mobile' => 'required|digits:10',
            'message' => 'required'
        ];
    }
}
