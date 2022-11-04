<?php

namespace App\Http\Controllers\estadoTickets;

use App\Http\Controllers\Controller;
use App\Http\Requests\ticketStatus\estadoTicketsRequest;
use App\Models\ticketStatus\estadoTickets;
use Illuminate\Http\Request;

class estadoTicketsController extends Controller
{
    public function showEstadoTicket(){
    $status= estadoTickets::all()->where('status',1);
    return $status;
    }
    public function register(estadoTicketsRequest $request){

        $ticketsCreate = estadoTickets::create($request->validated());
        return $ticketsCreate;
    }
    public function disable($id, $status){
        estadoTickets::where('id_ticket_status', $id)->update([ 'status' => $status ]);
        return  ' estado de ticket actualzado correctamente';
    }
}
