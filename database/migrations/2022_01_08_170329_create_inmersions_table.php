<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmersionsTable extends Migration
{
    public function up()
    {
        Schema::create('inmersiones', function (Blueprint $table) {
            $table->id('id_inmersion');
            $table->integer('lugar');
            $table->foreign('lugar')->references('id_localizacion')->on('localizaciones')->onDelete("cascade");
            $table->date('fecha');
            $table->integer('t_total');
            $table->integer('temperatura');
            $table->integer('consumo');
            $table->integer('lastre');
            $table->integer('litros_bot');
            $table->integer('prof_max');
            $table->integer('num_instructor');
            $table->foreign('num_instructor')->references('id_instructor')->on('instructores')->onDelete("cascade");
            $table->integer('num_buceadores');
        });
    }
    public function down()
    {
        Schema::dropIfExists('inmersiones');
    }
}