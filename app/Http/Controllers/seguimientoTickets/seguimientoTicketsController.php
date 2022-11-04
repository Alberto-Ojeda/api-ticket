<?php

namespace App\Http\Controllers\seguimientoTickets;

use App\Http\Controllers\Controller;
use App\Http\Requests\seguimientoTickets\seguimientoTicketsRequest;
use App\Models\seguimientoTickets\seguimientoTickets;
use Illuminate\Http\Request;

class seguimientoTicketsController extends Controller
{
    public function register(seguimientoTicketsRequest $request){
        $ticketsCreate = seguimientoTickets::create($request->validated());
        return $ticketsCreate;
    }

    public function show($idTicket){
        $tickets= seguimientoTickets::where('id_ticket','=',$idTicket)->orderBy('id_seguimiento_ticket','asc')->get();

    }

}
