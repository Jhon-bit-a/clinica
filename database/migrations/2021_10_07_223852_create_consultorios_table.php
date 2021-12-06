<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorios', function (Blueprint $table) {
            $table->id('id_consultorio');
            $table->unsignedBigInteger('id_enfermeria');
            $table->unsignedBigInteger('id_historial');
            $table->foreign('id_enfermeria')->references('id_enfermeria')->on('enfermerias');
            $table->foreign('id_historial')->references('id_historial')->on('historiales');
            $table->string('n_consultorio');
            $table->string('estado');


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
        Schema::dropIfExists('consultorios');
    }
}
