<?php

namespace App\Http\Requests\empleados;

use Illuminate\Foundation\Http\FormRequest;

class empleadosRequest extends FormRequest
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
        /* 'id_empleado', */
        'nombre' => 'required',
        'apellido' => 'required',
        'status' => 'required',
        'id_equipo' => 'required',
        'created_by' => 'required',
        'updated_by' => 'required',

        ];
    }
}
