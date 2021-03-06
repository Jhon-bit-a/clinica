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
            $table->bigIncrements('idconsultorio');
            $table->unsignedBigInteger('idenfermeria');
            $table->unsignedBigInteger('idhistorial');
            $table->foreign('idenfermeria')->references('idenfermeria')->on('enfermerias');
            $table->foreign('idhistorial')->references('idhistorial')->on('historials');
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
