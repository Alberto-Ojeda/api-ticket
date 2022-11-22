<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->integerIncrements('id_empleado');
            $table->string('username');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('password');
            $table->tinyInteger('status');
            $table->unsignedInteger('id_equipo');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('cascade');
            $table->integer('created_by');
            $table->integer('updated_by');
/*             $table->dateTime('created_at');
 */            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
