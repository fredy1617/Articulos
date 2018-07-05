<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'precio' => 'required', 
            'cantidad'  => 'required',
            'tipo_cantidad'  => 'required',
            'proveedor_id'  => 'required', 
            'categoria_id' => 'required',
        ];
    }

    public function messages()
    {
    return [
        'nombre.required' => 'El :attribute es obligatorio.',
        'precio.required' => 'Añade un :attribute al producto.',
        'cantidad.required' => 'Añade la :attribute del producto.',
        'tipo_cantidad.required' => 'Añade un tipo de cantidad del producto.',
        'proveedor_id.required' => 'Elije un proveedor del producto.',
        'categoria_id.required' => 'Elije una categoria del producto.',
    ];
    }
}
