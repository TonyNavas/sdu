<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura');
            $table->foreign('numero_factura')->references('num_factura')->on('factura_ventas');
            $table->string('Cedula_cliente');
            $table->foreign('Cedula_cliente')->references('cedula')->on('clientes');
            $table->string('nombre_cliente');
            $table->string('producto_id');
            $table->foreign('producto_id')->references('id_producto')->on('productos');
            $table->string('nombre_producto');
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
        Schema::dropIfExists('detalle_factura_ventas');
    }
}
