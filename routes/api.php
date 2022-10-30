<?php

use App\Http\Controllers\area\areaTicketsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\estadoTickets\estadoTicketsController;
use App\Http\Controllers\tickets\ticketsController;
use App\Http\Controllers\ticketService\ticketService;
use App\Http\Controllers\ticketService\ticketServiceController;
use App\Http\Controllers\tipotickets\tipoTicketsController;
use App\Models\ticketService\servicioTickets;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/ticket' , [tipoTicketsController::class, 'showTypeticket']);
Route::post('/register', [AuthController::class, 'register'] );
Route::post('/login', [AuthController::class, 'login'] );

Route::get('/ticket' , [tipoTicketsController::class, 'showTypeticket']);

Route::prefix('area')->group(function () {
    Route::get('/show' , [areaTicketsController::class, 'showAreaTicket']);
    Route::post('/register' , [areaTicketsController::class, 'register']);

});


Route::prefix('servicio')->group(function () {
    Route::get('/show' , [ticketServiceController::class, 'showServiceTicket']);
});


Route::prefix('estado')->group(function () {
    Route::get('/show',[estadoTicketsController::class,'showEstadoTicket']);
});



Route::prefix('tickets')->group(function () {
Route::post('/register', [ticketsController::class, 'register'] );
Route::post('/update/{id}', [ticketsController::class, 'update'] );
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

