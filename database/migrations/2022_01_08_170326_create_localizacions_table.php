<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalizacionsTable extends Migration
{
    public function up()
    {
        Schema::create('localizaciones', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre', 25);
            $table->float('longitud');
            $table->float('latitud');
            $table->string('pais', 30);
            $table->string('localidad', 30);
            $table->integer('num_buceos');
        });
    }
    public function down()
    {
        Schema::dropIfExists('localizaciones');
    }
}