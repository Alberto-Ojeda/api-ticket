<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->integerIncrements('id_equipo');
            $table->string('nombre');
            $table->tinyInteger('status');
            $table->unsignedSmallInteger('id_tipo_equipo');
            $table->foreign('id_tipo_equipo')->references('id_tipo_equipo')->on('tipo_equipo')->onDelete('restrict');
            $table->unsignedInteger('id_tipo_area');
             $table->foreign('id_tipo_area')->references('id_area')->on('area_ticket')->onDelete('restrict');
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
        Schema::dropIfExists('equipos');
    }
}
