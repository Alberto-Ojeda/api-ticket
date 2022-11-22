<?php

namespace Database\Seeders;

use App\Http\Controllers\area\areaTicket;
use App\Http\Controllers\equipos\equipos;
use App\Models\tipotickets\tipoTickets;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsRoleSeeder::class);
        $this->call(servicioTicketSeeder::class);
        $this->call(tipoTicketsSeeder::class);
        $this->call(tipoEquiposSeeder::class);
        $this->call(areaTicketsSeeder::class);
        $this->call(equiposSeeder::class);
        $this->call(estatusTicketSeeder::class);
        $this->call(empleadoSeeder::class);
        $this->call(prioridadSeeder::class);
        $this->call(ticketsSeeder::class);
        $this->call(seguimientoTicketsSeeder::class);
        $this->call(proveedores::class);
        // \App\Models\User::factory(10)->create();
    }
}
