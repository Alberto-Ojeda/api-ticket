<?php

namespace App\Http\Controllers\ticketService;

use App\Http\Controllers\Controller;
use App\Http\Requests\ticketService\servicioTicketsRequest;
use App\Models\ticketService\servicioTickets;
use Illuminate\Http\Request;

class ticketServiceController extends Controller
{
    public function showServiceTicket(){
        $tickets= servicioTickets::all()->where('status',1);
        return $tickets;
    }
    public function register(servicioTicketsRequest $request){

        $ticketsCreate = servicioTickets::create($request->validated());
        return $ticketsCreate;
    }
    public function disable($id, $status){
        servicioTickets::where('id_servicio_ticket', $id)->update([ 'status' => $status ]);
        return  ' estado de ticket actualzado correctamente';
    }
}
