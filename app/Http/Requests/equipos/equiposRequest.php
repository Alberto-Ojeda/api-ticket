<?php

namespace App\Http\Requests\equipos;

use Illuminate\Foundation\Http\FormRequest;

class equiposRequest extends FormRequest
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
            'id_equipo'=> 'required',
            'nombre'=> 'required',
            'status'=> 'required',
            'id_tipo_equipo'=> 'required',
            'id_tipo_area'=> 'required',
            'created_by'=> 'required',
            'updated_by'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',

        ];
    }
}
