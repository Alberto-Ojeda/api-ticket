<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class equiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
            'id_equipo' => '1',
            'nombre' => 'Desarrollo',
            'status' => '1',
            'id_tipo_equipo' =>'1',
            'id_tipo_area' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('equipos')->insert([
            'id_equipo' => '2',
            'nombre' => 'Desarrollo2',
            'status' => '1',
            'id_tipo_equipo' =>'1',
            'id_tipo_area' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('equipos')->insert([
            'id_equipo' => '3',
            'nombre' => 'Desarrollo3',
            'status' => '1',
            'id_tipo_equipo' =>'1',
            'id_tipo_area' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('equipos')->insert([
            'id_equipo' => '4',
            'nombre' => 'Desarrollo4',
            'status' => '1',
            'id_tipo_equipo' =>'1',
            'id_tipo_area' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
      }
}
