<?php

namespace App\Http\Requests\areaTickets;

use Illuminate\Foundation\Http\FormRequest;

class areaTicketsRequest extends FormRequest
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
            'descripcion' => 'required',
            'status' => 'required',
                 ];
    }
}
