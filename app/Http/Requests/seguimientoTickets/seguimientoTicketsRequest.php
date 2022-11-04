<?php

namespace App\Http\Requests\seguimientoTickets;

use Illuminate\Foundation\Http\FormRequest;

class seguimientoTicketsRequest extends FormRequest
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
            'id_seguimiento_ticket'=> 'required',
            'id_ticket'=> 'required',
            'id_equipo'=> 'nullable',
            'id_empleado'=> 'nullable',
            'comentario'=> 'required',
            'status'=> 'required',


        ];
    }
}
