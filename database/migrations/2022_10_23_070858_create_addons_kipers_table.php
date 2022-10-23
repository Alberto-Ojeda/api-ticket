<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonsKipersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addons_kipers', function (Blueprint $table) {
            $table->id('id_addons_kipers');
            $table->string('nombre_addons');
            $table->string('id_heroku_kiper');
            $table->string('id_cuenta_kiper');
            $table->tinyInteger('status_addons');
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
        Schema::dropIfExists('addons_kipers');
    }
}
