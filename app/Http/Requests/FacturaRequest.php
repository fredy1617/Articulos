<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaRequest extends FormRequest
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
            'total' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'venta_id.required' => 'El numero de venta es obligatorio.',
        'total.required' => 'El total es obligatorio.',
    ];
    }
}
