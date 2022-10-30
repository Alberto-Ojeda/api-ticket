<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prioridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prioridad_tickets')->insert([
        'id_prioridad' => '1',
        'nombre' => 'aceptacion',
        'descripcion' => 'el ticket comienza proceso de resolucion',
        'status' => '1',
        'created_at'=>Carbon::now(),
        'updated_at'=>Carbon::now(),
        ]);


    }
}
