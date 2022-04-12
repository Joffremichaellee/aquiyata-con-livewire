<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('dni_ruc',20)->unique();
            $table->string('telefono');
            $table->string('celular');
            $table->string('email')->unique();
            $table->string('whattsap',20);
            $table->string('logo');
            $table->string('slogan');
            $table->string('descripcion', 256)->nullable();
            $table->boolean('estado')->default(1);
            $table->string('estrellas')->nullable();
            $table->integer('num_visitas');
            $table->string('descripcion_breve', 256)->nullable();
            $table->string('titulo',45)->unique();
            $table->string('title',45)->unique();
            $table->string('keywords',45);
            $table->string('empresascol',45);
            $table->string('slug',45)->unique();
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
        Schema::dropIfExists('empresas');
    }
}
