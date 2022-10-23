<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEquipo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_equipo', function (Blueprint $table) {
            $table->smallIncrements('id_tipo_equipo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->tinyInteger('status');
/*             $table->dateTime('created_at');
 */
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
        Schema::dropIfExists('tipo_equipo');
    }
}
