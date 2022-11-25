<?php

namespace App\Http\Requests;

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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_ticket_status'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
            'status'=> 'required',
            'created_at'=> 'required',
            'updated_at'=> 'required',
        ];
    }
}
