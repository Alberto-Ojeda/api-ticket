<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurables', function (Blueprint $table) {
            $table->id('id');
            $table->string('JWT_SECRET');
            $table->string('AWS_ACESS_KEY_ID');
            $table->string('AWS_SECRET_ACCESS_KEY');
            $table->string('AWS_DEFAULT_REGION');
            $table->string('AWS_BUCKET');
            $table->string('MAILGUN_DOMAIN');
            $table->string('MAILGUN_PRIVATE');
            $table->string('MAILGUN_PUBLIC');
            $table->string('TWILIO_ACCOUNT_SID');
            $table->string('TWILIO_AUTH_TOKEN');
            $table->string('TWILIO_NUMBER');
            $table->string('BUGSNAG_API_KEY');
            $table->string('URL_FRONT');
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
        Schema::dropIfExists('configurables');
    }
}
