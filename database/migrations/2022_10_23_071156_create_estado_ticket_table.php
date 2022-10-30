<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_tickets', function (Blueprint $table) {
            $table->smallIncrements('id_ticket_status');
            $table->string('nombre');
            $table->string('descripcion');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('estado_ticket');
    }
}
