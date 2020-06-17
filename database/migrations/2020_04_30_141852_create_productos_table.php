<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('review');
            $table->mediumText('descripcion');
            $table->string('codigo_unico');
            $table->date('publicado');
            $table->decimal('precio');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('subcategoria_id');
            $table->foreign('subcategoria_id')->references('id')->on('sub_categorias');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->unsignedBigInteger('submarca_id');
            $table->foreign('submarca_id')->references('id')->on('submarcas');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *    protected $guarded = [];
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
