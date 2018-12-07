<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('Usuario_id');
            $table->string('Usuario_nombre');
            $table->string('Usuario_apPaterno');
            $table->string('Usuario_apMaterno');
            $table->date('Usuario_fechaNacimiento');
            $table->string('Usuario_correo')->unique();
            $table->string('Usuario_contraseña');
            $table->integer('Usuario_tipo');
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
        Schema::dropIfExists('usuario');
    }
}
