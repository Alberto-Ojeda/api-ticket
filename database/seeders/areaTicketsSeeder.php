<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areaTicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area_tickets')->insert([
            'id_area' => '1',
            'nombre' => 'Desarrollo',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('area_tickets')->insert([
            'id_area' => '2',
            'nombre' => 'finanzas',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('area_tickets')->insert([
            'id_area' => '3',
            'nombre' => 'soporte',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        DB::table('area_tickets')->insert([
            'id_area' => '4',
            'nombre' => 'recursos humanos',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);      }
}
