<?php

namespace App\Http\Controllers\estadoTickets;

use App\Http\Controllers\Controller;
use App\Models\ticketStatus\estadoTickets;
use Illuminate\Http\Request;

class estadoTicketsController extends Controller
{
    public function showEstadoTicket(){
    $status= estadoTickets::all()->where('status',1);
    return $status;
    }
}
