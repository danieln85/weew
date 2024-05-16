<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2500',
            'editor' => 'required|string|max:255',
        ];
    
        // Si estamos creando un nuevo blog, hacemos que la imagen sea obligatoria
        if ($this->isMethod('post')) {
            $rules['image_450x300'] = 'required|image|mimes:jpg,jpeg,png|max:2048';  // 2MB Max
        } else {
            // Si estamos actualizando un blog, hacemos que la imagen sea opcional
            $rules['image_450x300'] = 'nullable';
        }
    
        return $rules;
    }
    
}
