<?php

namespace App\Http\Controllers\area;

use App\Http\Controllers\Controller;
use App\Http\Requests\areaTickets\areaTicketsRequest;
use App\Models\areaTickets\areaTickets;
use Illuminate\Http\Request;

class areaTicketsController extends Controller
{
    public function showAreaTicket(){
        $areas= areaTickets::all()->where('status',1);
        return $areas;

    }

    public function register(areaTicketsRequest $request){

        $ticketsCreate = areaTickets::create($request->validated());
        return $ticketsCreate;
    }

    public function disable($id, $status){
        areaTickets::where('id_area', $id)->update([ 'status' => $status ]);
        return  'El area se a desactivado exitosamente';
    }
}
