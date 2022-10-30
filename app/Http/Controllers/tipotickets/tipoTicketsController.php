<?php

namespace App\Http\Controllers\tipotickets;

use App\Http\Controllers\Controller;
use App\Models\tipotickets\tipoTickets;
use Illuminate\Http\Request;

class tipoTicketsController extends Controller
{
    public function showTypeticket(){
        $tickets= tipoTickets::all()->where('status',1);
        return $tickets;
    }
}
