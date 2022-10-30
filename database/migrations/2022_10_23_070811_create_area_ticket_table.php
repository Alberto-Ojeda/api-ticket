<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_tickets', function (Blueprint $table) {
            $table->integerIncrements('id_area');
            $table->string('nombre');

            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('area_ticket');
    }
}
