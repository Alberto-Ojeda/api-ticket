<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estatusTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_tickets')->insert([
            'id_ticket_status' => '1',
            'nombre' => 'analisis',
            'descripcion' => 'etapa de analisis para ver si es conveniente resolverlo',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('estado_tickets')->insert([
            'id_ticket_status' => '2',
            'nombre' => 'aceptacion',
            'descripcion' => 'el ticket comienza proceso de resolucion',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('estado_tickets')->insert([
            'id_ticket_status' => '3',
            'nombre' => 'concluido',
            'descripcion' => 'el ticket se a resuelto exitosamente',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
