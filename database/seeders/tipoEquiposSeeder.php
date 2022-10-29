<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoEquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipos')->insert([
            'id_tipo_equipo' => '1',
            'nombre' => 'Desarrollo',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_equipos')->insert([
            'id_tipo_equipo' => '2',
            'nombre' => 'Diseño',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_equipos')->insert([
            'id_tipo_equipo' => '3',
            'nombre' => 'Finanzas',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('tipo_equipos')->insert([
            'id_tipo_equipo' => '4',
            'nombre' => 'Soporte',
            'status' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
