<?php

namespace App\Http\Requests\tokenProveedores;

use Illuminate\Foundation\Http\FormRequest;

class tokenProveedoresRequest extends FormRequest
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
            'id_token_proveedores'=> 'required',
            'id_proveedor'=> 'required',
            'token'=> 'required',
            'status'=> 'required',
            'last_used_at'=> 'required'
        ];
    }
}
