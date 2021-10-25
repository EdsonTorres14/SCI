<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('descripcion',100);
            $table->double('precio');
            $table->date('fechaCompra');
            $table->string('estado');
            $table->string('comentarios', 100);
            $table->integer('categoria_idCategoria')->unsigned();
            $table->integer('sucursal_idSucursal')->unsigned();
            $table->foreign('categoria_idCategoria')->references('id')->on('categoria');
            $table->foreign('sucursal_idSucursal')->references('id')->on('sucursal');
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
        Schema::dropIfExists('producto');
    }
}
