<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
class AuthController extends Controller
{
    public function register(Request $request){
        $validateData= $request->validate([
            'name' =>'required',
            'email' => 'required',
            'password'=>'required'

        ]);
        $user = User::create([
            'name'=> $validateData['name'],
            'email'=> $validateData['email'],
            'password'=>Hash::make($validateData['password'])
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return response() -> json([
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        if(!Auth:: attempt($request->only(keys:'email' , 'password'))){
            return response()->json([
                'message'=> 'Revisa tus credenciales'

            ], status:401);
        }
    }
}
