<?php

namespace App\Http\Controllers\ticketService;

use App\Http\Controllers\Controller;
use App\Models\ticketService\servicioTickets;
use Illuminate\Http\Request;

class ticketServiceController extends Controller
{
    public function showServiceTicket(){
        $tickets= servicioTickets::all()->where('status',1);
        return $tickets;
    }
}
