<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetalleVentaRequest extends FormRequest
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
            'venta_id' => 'required',
            'factura_id' => 'required',
            'producto_id' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'venta_id.required' => 'El numero de venta es obligatorio.',
        'factura_id.required' => 'El numero de factura es obligatorio.',
        'producto_id.required' => 'El producto es obligatorio.',
    ];
    }
}
