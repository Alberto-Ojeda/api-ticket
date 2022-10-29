<?php

namespace App\Http\Controllers\tickets;

use App\Http\Controllers\Controller;
use App\Http\Requests\tickets\ticketsRequest;
use App\Models\tickets\tickets;
use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function register(ticketsRequest $request){

        $ticketsCreate = tickets::create($request->validated());
        return $ticketsCreate;
    }
}
