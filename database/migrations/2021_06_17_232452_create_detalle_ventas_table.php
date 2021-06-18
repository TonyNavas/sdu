<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('id_detalle_venta')->unique();
            $table->string('venta_id');
            $table->foreign('venta_id')->references('id_venta')->on('ventas');

            $table->string('descripcion_venta');

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
        Schema::dropIfExists('detalle_ventas');
    }
}
