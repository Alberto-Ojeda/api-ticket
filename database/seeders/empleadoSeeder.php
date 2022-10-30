<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'id_empleado' => '1',
            'nombre' => 'Desarrollo',
            'apellido' => '1',
            'status' =>'1',
            'id_equipo' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
