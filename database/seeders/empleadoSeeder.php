<?php

namespace Database\Seeders;

use App\Models\empleados\empleados;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $newUser= empleados::firstOrCreate([
            'id_empleado' => '1',
            'username'=>'empleado1',
            'nombre' => 'Desarrollo',
            'apellido' => '1',
            'password'=>'1234',
            'status' =>'1',
            'id_equipo' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        $role = Role::where('name', 'superadmin')->get()->first();
        $newUser->roles()->sync($role->id);

        DB::table('empleados')->insert([
            'id_empleado' => '2',
            'username'=>'empleado2',
            'nombre' => 'francisco',
            'apellido' => 'sanchez',
            'password'=>'1234',
            'status' =>'1',
            'id_equipo' => '1',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('empleados')->insert([
            'id_empleado' => '3',
            'username'=>'empleado3',
            'nombre' => 'Guillermo',
            'apellido' => 'sanchez',
            'password'=>'1234',
            'status' =>'1',
            'id_equipo' => '2',
            'created_by' =>'1',
            'updated_by' => '1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
