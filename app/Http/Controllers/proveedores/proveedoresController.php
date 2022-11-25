<?php

namespace App\Http\Controllers\proveedores;

use App\Http\Controllers\Controller;
use App\Http\Requests\proveedores\proveedoresRequest;
use App\Models\proveedores\proveedores;
use App\Models\tokenProveedores\tokenProveedores;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
class proveedoresController extends Controller
{

    public function register(){
        $proveedor=proveedores::create([
            'proveedor' => request('proveedor'),
            'api_key' =>Str::random(10),
            'status'=> true,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);

        return "Usuario registrado con exito";
    }

    

    public function show(){
        $tickets= proveedores::all()->where('status',1);
        return $tickets;
    }
    public function disable($id,$status){
        proveedores::where('id_proveedor', $id)->update([ 'status' => $status ]);
        return 'proveedor dado de baja con exito';
    }
}
