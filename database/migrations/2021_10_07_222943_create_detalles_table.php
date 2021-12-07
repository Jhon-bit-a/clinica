<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_paciente');
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_personal');
            $table->unsignedBigInteger('id_historial');
            $table->foreign('id_paciente')->references('id')->on('pacientes');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_personal')->references('id')->on('personales');
            $table->foreign('id_historial')->references('id')->on('historiales');
            $table->date('fecha');
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
        Schema::dropIfExists('detalles');
    }
}
