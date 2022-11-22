<?php

namespace App\Http\Requests\proveedores;

use Illuminate\Foundation\Http\FormRequest;

class proveedoresRequest extends FormRequest
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
            'id_proveedor'=> 'required',
            'proveedor'   => 'required',
            'api_key'     => 'required',
            'status'       => 'required',
            'created_by'  => 'required',
            'updated_by'  => 'required',
            'created_at'  => 'required',
            'updated_at'  => 'required',
    
        ];
    }
}
