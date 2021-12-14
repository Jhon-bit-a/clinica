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
            $table->bigIncrements('idpersonal');
            $table->unsignedBigInteger('idcargo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->string('genero');
            $table->string('estado');
            $table->foreign('idcargo')->references('idcargo')->on('cargos');
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
