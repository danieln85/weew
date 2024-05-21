<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nombre' => 'required|string|max:60',
            'referencia' => 'required|string|max:60',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'categoria' => 'required|string|max:50',
            'stock' => 'required|numeric|min:0',
            'descuento' => 'nullable|numeric|min:0|max:99',
            'estado' => 'required|in:activo,inactivo,agotado',
            'reputacion' => 'required|in:normal,destacado,oferta',
            'imagen2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagen6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ];
    
        // Si estamos creando un nuevo producto, hacemos que la imagen sea obligatoria
        if ($this->isMethod('post')) {
            $rules['imagen'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } else {
            // Si estamos actualizando un producto, hacemos que la imagen sea opcional
            $rules['imagen'] = 'nullable';
        }
    
        return $rules;
    }
    
}
