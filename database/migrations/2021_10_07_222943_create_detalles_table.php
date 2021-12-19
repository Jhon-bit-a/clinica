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
            $table->bigIncrements('iddetalle');
            $table->unsignedBigInteger('idpaciente');
            $table->unsignedBigInteger('idservicio');
            $table->unsignedBigInteger('idpersonal');
            $table->unsignedBigInteger('idhistorial');
            $table->foreign('idpaciente')->references('idpaciente')->on('pacientes');
            $table->foreign('idservicio')->references('idservicio')->on('servicios');
            $table->foreign('idpersonal')->references('idpersonal')->on('personales');
            $table->foreign('idhistorial')->references('idhistorial')->on('historials');
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
