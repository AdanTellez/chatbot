<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCatalogoPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catPlan', function (Blueprint $table) {
            $table->increments('catPlan_id');
            $table->string('catPlan_nombre');
            $table->float('catPlan_costo');
            $table->integer('catPlan_duracion');
            $table->text('catPlan_descripcion');
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
        Schema::dropIfExists('catPlan');
    }
}
