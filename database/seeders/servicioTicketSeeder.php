<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class servicioTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '1',
            'nombre' => 'Contrataciones',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '2',
            'nombre' => 'Update de planes',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '3',
            'nombre' => 'Asistencia de usuarios',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '4',
            'nombre' => 'Quiero un tour',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '5',
            'nombre' => 'Conexión de campañas',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '6',
            'nombre' => 'Subir mis bases de datos',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '7',
            'nombre' => 'Personalizaciones y desarrollos',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '8',
            'nombre' => 'Facturas y estados de cuenta',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '9',
            'nombre' => 'Cancelaciones',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '10',
            'nombre' => 'Reportar errores',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('servicio_tickets')->insert([
            'id_servicio_ticket' => '11',
            'nombre' => 'Otro',

            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
