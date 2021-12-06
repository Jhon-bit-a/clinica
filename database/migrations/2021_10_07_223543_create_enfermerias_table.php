<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermerias', function (Blueprint $table) {
            $table->id('id_enfermeria');
            $table->unsignedBigInteger('id_historial');
            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_historial')->references('id_historial')->on('historiales');
            $table->foreign('id_personal')->references('id_personal')->on('personales');
            $table->string('presion');
            $table->string('talla');
            $table->string('peso');


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
        Schema::dropIfExists('enfermerias');
    }
}
