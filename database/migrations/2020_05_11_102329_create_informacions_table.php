<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->id();
            $table->string('celular');
            $table->string('telefono');
            $table->string('correo');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('horariosemana_abrir');
            $table->string('horariosemana_cerrar');
            $table->string('horariofinsemana_abrir');
            $table->string('horariofinsemana_cerrar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacions');
    }
}
