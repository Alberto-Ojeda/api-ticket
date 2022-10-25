<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class tipoTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '1',
            'tipo_ticket' => 'Contrataciones',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '2',
            'tipo_ticket' => 'Update de planes',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '3',
            'tipo_ticket' => 'Asistencia de usuarios',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '4',
            'tipo_ticket' => 'Quiero un tour',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '5',
            'tipo_ticket' => 'Conexión de campañas',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '6',
            'tipo_ticket' => 'Subir mis bases de datos',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '7',
            'tipo_ticket' => 'Personalizaciones y desarrollos',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '8',
            'tipo_ticket' => 'Facturas y estados de cuenta',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '9',
            'tipo_ticket' => 'Cancelaciones',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '10',
            'tipo_ticket' => 'Reportar errores',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_tickets')->insert([
            'id_tipo_tickets' => '11',
            'tipo_ticket' => 'Otro',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
