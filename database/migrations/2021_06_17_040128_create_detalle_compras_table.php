<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compras', function (Blueprint $table) {
            $table->id();
            $table->string('id_detalle_compra')->unique();
            $table->date('fecha_produccion');
            $table->date('fecha_vencimiento');
            
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('id')->on('users');
            $table->string('compra_id');
            $table->foreign('compra_id')->references('id_compra')->on('compras');
            $table->string('proveedor_id');
            $table->foreign('proveedor_id')->references('id_proveedor')->on('proveedors');
            $table->string('categoria_id');
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');

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
        Schema::dropIfExists('detalle_compras');
    }
}
