<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->increments('Pago_id');
            $table->integer('Pago_usuarioPlan_usuarioPlan_id');
            $table->dateTime('Pago_fecha');
            $table->string('Pago_idTransaccion');
            $table->string('Pago_medio');
            $table->float('Pago_total');
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
        Schema::dropIfExists('pago');
    }
}
