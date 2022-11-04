<?php

namespace App\Http\Requests\ticketService;

use Illuminate\Foundation\Http\FormRequest;

class servicioTicketsRequest extends FormRequest
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
        'id_servicio_ticket' => 'required',
        'nombre' => 'required',
        'descripcion' => 'required',
        'status' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',

        ];
    }
}
