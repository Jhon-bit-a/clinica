<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personales', function (Blueprint $table) {
            $table->id('id_personal');
            $table->unsignedBigInteger('id_cargo');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('direccion');
            $table->date('fecha_nac');
            $table->string('genero');
            $table->string('estado');
            $table->foreign('id_cargo')->references('id_cargo')->on('cargos');   
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
        Schema::dropIfExists('personales');
    }
}
