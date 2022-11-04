<?php

namespace App\Http\Controllers\tickets;

use App\Http\Controllers\Controller;
use App\Http\Requests\tickets\ticketsRequest;
use App\Models\tickets\tickets;
use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function register(ticketsRequest $request){

        $ticketsCreate = tickets::create($request->validated());
        return $ticketsCreate;
    }

    public function update(ticketsRequest $request, $id){
        tickets::where('id_ticket', $id)->update
        ([ 'id_ticket_status' => $request->input('id_ticket_status'),
        'updated_by' => $request->input('updated_by')]);
        return 'actualizado correctamente';
    }

    public function show(){
/*         all() */
/* metodo para traer  los tickets de forma ascendente de esta forma se traera el mas actual */
        $tickets= tickets::where('id_ticket_status','<',3)->orderBy('fecha_expiracion','asc')->get();
        return $tickets;
    }
}
