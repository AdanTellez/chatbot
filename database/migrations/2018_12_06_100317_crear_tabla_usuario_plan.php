<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioPlan', function (Blueprint $table) {
            $table->increments('usuarioPlan_id');
            $table->integer('usuarioPlan_Cliente_Cliente_id');
            $table->integer('usuarioPlan_catPlan_catPlan_id');
            $table->dateTime('usuarioPlan_fecha');
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
        Schema::dropIfExists('usuarioPlan');
    }
}
