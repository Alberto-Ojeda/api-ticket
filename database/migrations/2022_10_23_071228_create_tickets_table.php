<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->integerIncrements('id_ticket');
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_cumplimiento');
            $table->date('fecha_expiracion');
            $table->unsignedInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('cascade');
            $table->unsignedInteger('id_empleado');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->unsignedSmallInteger('id_tipo_tickets');
            $table->foreign('id_tipo_tickets')->references('id_tipo_tickets')->on('tipo_tickets')->onDelete('cascade');
            $table->unsignedInteger('id_area');
            $table->foreign('id_area')->references('id_area')->on('area_tickets')->onDelete('cascade');
            $table->unsignedSmallInteger('id_servicio_ticket');
            $table->foreign('id_servicio_ticket')->references('id_servicio_ticket')->on('servicio_tickets')->onDelete('cascade');
            $table->unsignedSmallInteger('id_ticket_status');
            $table->foreign('id_ticket_status')->references('id_ticket_status')->on('estado_tickets')->onDelete('cascade');
            $table->unsignedSmallInteger('id_prioridad');
            $table->foreign('id_prioridad')->references('id_prioridad')->on('prioridad_tickets')->onDelete('cascade');
            $table->integer('created_by');
            $table->integer('updated_by');
/*             $table->dateTime('created_at'); */
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
        Schema::dropIfExists('tickets');
    }
}
