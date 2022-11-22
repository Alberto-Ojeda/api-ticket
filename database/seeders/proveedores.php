<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class proveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++ )
        {
        DB::table('proveedores')->insert([
            'id_proveedor' => $i,
            'proveedor' => 'proveedor'.$i,
            'api_key' =>Str::random(10),
            'status' => true,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
