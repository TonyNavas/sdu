<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_creditos', function (Blueprint $table) {
            $table->id();
            $table->string('credito_id');
            $table->foreign('credito_id')->references('id_credito')->on('creditos');

            $table->string('descripcion_venta_credito');

            $table->string('producto');
            $table->foreign('producto')->references('id_producto')->on('productos');
            $table->string('precio');
            $table->string('cantidad');
            $table->string('total');
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
        Schema::dropIfExists('detalles_creditos');
    }
}
