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
            $table->bigIncrements('idenfermeria');
            $table->unsignedBigInteger('idhistorial');
            $table->unsignedBigInteger('idpersonal');
            $table->foreign('idhistorial')->references('idhistorial')->on('historials');
            $table->foreign('idpersonal')->references('idpersonal')->on('personales');
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
