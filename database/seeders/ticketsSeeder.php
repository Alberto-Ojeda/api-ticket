<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ticketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([

        'id_ticket'=> '1',
        'nombre'=> 'soporte',
        'descripcion'=> 'se necesita brindar soporte',
        'fecha_inicio'=> '2022-08-12',
        'fecha_cumplimiento'=> '2022-09-12',
        'fecha_expiracion'=> '2022-09-24',
/*         'id_equipo'=> '',
 */        'id_empleado'=> '1',
        'id_tipo_tickets'=> '1',
        'id_area'=> '1',
        'id_servicio_ticket'=> '1',
        'id_ticket_status'=> '1',
        'id_prioridad'=> '1',
        'created_by'=> '1',
        'updated_by'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
        DB::table('tickets')->insert([

            'id_ticket'=> '2',
            'nombre'=> 'soporte',
            'descripcion'=> 'se necesita brindar soporte',
            'fecha_inicio'=> '2022-08-12',
            'fecha_cumplimiento'=> '2022-09-12',
            'fecha_expiracion'=> '2022-09-25',
            'id_equipo'=> '1',
/*             'id_empleado'=> '1',
 */            'id_tipo_tickets'=> '1',
            'id_area'=> '1',
            'id_servicio_ticket'=> '1',
            'id_ticket_status'=> '1',
            'id_prioridad'=> '1',
            'created_by'=> '1',
            'updated_by'=> '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ]);
       DB::table('tickets')->insert([

        'id_ticket'=> '3',
        'nombre'=> 'soporte',
        'descripcion'=> 'se necesita brindar soporte',
        'fecha_inicio'=> '2022-08-12',
        'fecha_cumplimiento'=> '2022-09-12',
        'fecha_expiracion'=> '2022-09-23',
/*         'id_equipo'=> '',
 */        'id_empleado'=> '2',
        'id_tipo_tickets'=> '1',
        'id_area'=> '1',
        'id_servicio_ticket'=> '1',
        'id_ticket_status'=> '1',
        'id_prioridad'=> '1',
        'created_by'=> '1',
        'updated_by'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
       DB::table('tickets')->insert([

        'id_ticket'=> '4',
        'nombre'=> 'soporte',
        'descripcion'=> 'se necesita brindar soporte',
        'fecha_inicio'=> '2022-08-12',
        'fecha_cumplimiento'=> '2022-09-12',
        'fecha_expiracion'=> '2022-09-26',
  /*       'id_equipo'=> '', */
        'id_empleado'=> '1',
        'id_tipo_tickets'=> '1',
        'id_area'=> '1',
        'id_servicio_ticket'=> '1',
        'id_ticket_status'=> '1',
        'id_prioridad'=> '1',
        'created_by'=> '1',
        'updated_by'=> '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);
    }
}
