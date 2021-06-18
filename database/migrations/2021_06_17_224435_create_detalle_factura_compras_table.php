<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura_compras', function (Blueprint $table) {
            $table->id();
            $table->string('numero_factura');
            $table->foreign('numero_factura')->references('num_factura')->on('factura_compras');
            $table->string('producto_id');
            $table->foreign('producto_id')->references('id_producto')->on('productos');
            $table->string('cantidad');
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
        Schema::dropIfExists('detalle_factura_compras');
    }
}
