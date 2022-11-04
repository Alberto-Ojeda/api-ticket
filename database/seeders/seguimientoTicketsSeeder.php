<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seguimientoTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seguimiento_tickets')->insert([

        'id_seguimiento_ticket'=> '1',
        'id_ticket'=> '1',
/*         'id_equipo'=> '',
 */        'id_empleado'=> '1',
        'comentario'=> 'este es un comentario de prueba(1)',
        'status'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
     DB::table('seguimiento_tickets')->insert([

        'id_seguimiento_ticket'=> '2',
        'id_ticket'=> '2',
        'id_equipo'=> '1',
/*         'id_empleado'=> '',
 */        'comentario'=> 'este es un comentario de prueba(2)',
        'status'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
        DB::table('seguimiento_tickets')->insert([

        'id_seguimiento_ticket'=> '3',
        'id_ticket'=> '3',
/*         'id_equipo'=> '',
 */        'id_empleado'=> '2',
        'comentario'=> 'este es un comentario de prueba(3)',
        'status'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
        }
}
