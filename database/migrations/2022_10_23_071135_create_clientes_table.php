<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integerIncrements('id_cliente_heroku');
            $table->string('id_cliente');
            $table->string('id_cliente_conekta');
            $table->string('nombres_cliente');
            $table->string('apellidos_cliente');
            $table->string('email_cliente');
            $table->string('telefono_cliente');
            $table->string('dominio_cliente');
            $table->string('negocio_cliente');
            $table->integer('id_pais');
            $table->integer('id_estado');
            $table->string('provincia_cliente');
            $table->string('cp_cliente');
            $table->tinyInteger('status');
            $table->dateTime('date_created');
            $table->integer('id_user_created');
            $table->tinyInteger('trial_free');
            $table->dateTime('deleted_date');
            $table->tinyInteger('status_suscripcion');
            $table->tinyInteger('fecha_facturacion');
            $table->integer('notif_visto');
            $table->tinyInteger('id_frm_pago');
            $table->tinyInteger('no_viable');
$table->string('compro_otro_medio');

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
        Schema::dropIfExists('clientes');
    }
}
