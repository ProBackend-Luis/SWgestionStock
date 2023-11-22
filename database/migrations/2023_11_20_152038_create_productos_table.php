<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->integer('codigo_producto');
            $table->string('nombre_producto');
            $table->string('descripcion_producto');
            $table->integer('cantidad_producto');
            $table->integer('precioVenta');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_sucursal');
            $table->timestamps();

            //relacion
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursales');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
