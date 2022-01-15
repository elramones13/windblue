<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->id('id');
            $table->string('dni', 10);
            $table->string('nombre', 25);
            $table->string('apellido1', 25);
            $table->string('apellido2', 25);
            $table->date('f_nacimiento');
            $table->string('email', 50);
            $table->string('telefono', 20);
            $table->string('pais', 20);
            $table->string('cert_instructor', 25);
        });
    }
    public function down()
    {
        Schema::dropIfExists('instructores');
    }
}