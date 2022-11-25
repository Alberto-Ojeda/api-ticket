<?php

namespace App\Http\Controllers;

use App\Models\proveedores\proveedores;
use App\Models\tokenProveedores\tokenProveedores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class tokenProveedoresController extends Controller
{
  
    private function getProveedor($id){
        $proveedor=proveedores::where('status',true)->where('id_proveedor',$id)->get();
        return $proveedor;
    }

    public function creationToken($id){
        $proveedor = $this->getProveedor($id);
        $token=tokenProveedores::create([
            'id_proveedor'=> $id,
            'token'=> 'kiper' . Str::random(95),
            'status'=> true,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        return 'token creado: '. $token->token; 
    }


}
