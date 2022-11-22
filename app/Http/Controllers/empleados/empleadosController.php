<?php

namespace App\Http\Controllers\empleados;

use App\Http\Controllers\Controller;
use App\Http\Requests\empleados\empleadosRequest;
use App\Models\empleados\empleados;
use Illuminate\Http\Request;

class empleadosController extends Controller
{
    public function showEmpleados(){
        $areas= empleados::all()->where('status',1);
        return $areas;

    }

    public function register(empleadosRequest $request){

        $ticketsCreate = empleados::create($request->validated());
        return $ticketsCreate;
    }
    public function disable($id, $status){
        empleados::where('id_empleado', $id)->update([ 'status' => $status ]);
        return  ' empleado dado de baja exitosamente ';
    }
    
}
