<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmersionsTable extends Migration
{
    public function up()
    {
        Schema::create('inmersiones', function (Blueprint $table) {
            $table->id('id');
            $table->string('localizacion_id');
            $table->date('fecha');
            $table->integer('t_total');
            $table->integer('temperatura');
            $table->integer('consumo');
            $table->integer('lastre');
            $table->integer('litros_bot');
            $table->integer('prof_max');
            $table->string('instructor_id');
            $table->integer('num_buceadores');

            $table->foreign('localizacion_id')->references('id')->on('localizaciones')->onDelete("cascade");
            $table->foreign('instructor_id')->references('id')->on('instructores')->onDelete("cascade");
        });
    }
    public function down()
    {
        Schema::dropIfExists('inmersiones');
    }
}