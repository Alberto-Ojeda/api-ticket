<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateseguimientoTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_tickets', function (Blueprint $table) {
            $table->integerIncrements('id_seguimiento_ticket');
            $table->unsignedinteger('id_ticket');
            $table->foreign('id_ticket')->references('id_ticket')->on('tickets')->onDelete('cascade');
            $table->unsignedInteger('id_equipo')->nullable();
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('cascade');
            $table->unsignedInteger('id_empleado')->nullable();
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->string('comentario');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
