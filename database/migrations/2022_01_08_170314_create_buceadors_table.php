<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuceadorsTable extends Migration
{
    public function up()
    {
        Schema::create('buceadores', function (Blueprint $table) {
            $table->id('id');
            $table->string('dni', 10);
            $table->string('nombre', 25);
            $table->string('apellido1', 25);
            $table->string('apellido2', 25);
            $table->date('f_nacimiento')->nullable();
            $table->string('t_buceo', 50);
            $table->string('cert_buceo', 20);
            $table->string('email', 50)->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('pais', 20);
        });
    }
    public function down()
    {
        Schema::dropIfExists('buceadores');
    }
}