<?php

namespace App\Http\Controllers\equipos;

use App\Http\Controllers\Controller;
use App\Http\Requests\equipos\equiposRequest;
use App\Models\equipos\equipos;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    public function showEmpleados(){
        $areas= equipos::all()->where('status',1);
        return $areas;

    }

    public function register(equiposRequest $request){

        $ticketsCreate = equipos::create($request->validated());
        return $ticketsCreate;
    }
    public function disable($id, $status){
        equipos::where('id_equipo', $id)->update([ 'status' => $status ]);
        return  ' equipo dado de baja exitosamente ';
    }
}
