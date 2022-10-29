<?php

namespace App\Http\Requests\tickets;

use Illuminate\Foundation\Http\FormRequest;

class ticketsRequest extends FormRequest
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
            'id_ticket' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_inicio' => 'required',
            'fecha_cumplimiento' => 'required',
            'fecha_expiracion' => 'required',
            'id_equipo' => 'required',
            'id_empleado' => 'required',
            'id_tipo_tickets' => 'required',
            'id_area' => 'required',
            'id_servicio_ticket' => 'required',
            'id_ticket_status' => 'required',
            'id_prioridad' => 'required',
            'created_by' => 'required',
            'updated_by' => 'required',


            //
        ];
    }
}
