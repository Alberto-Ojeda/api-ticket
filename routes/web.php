<?php

use App\Http\Controllers\tipotickets\tipoTicketsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['Middleware' => 'auth:api'], function(){
/*     Route::get('/ticket', [tipoTicketsController::class, 'showTypeticket']); */
    Route::apiResource(name:'showTypeticket', controller:'tipoTicketsController');
});
Route::get('/', function () {
    return view('welcome');
});

