<?php

namespace App\Http\Controllers\tipotickets;

use App\Http\Controllers\Controller;
use App\Models\tipotickets\tipoTickets;
use Illuminate\Http\Request;

class tipoTicketsController extends Controller
{
public function showTypeticket(){
    $tickets= tipoTickets::all();

    $token = $tickets->createToken('auth_token')->plainTextToken;
    return response()->json([
        'access_token'=>$token,
        'token_typen' =>'Bearer'
    ]);
}
}
