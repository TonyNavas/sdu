<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VentasController;
use App\Http\Controllers\API\ComprasController;
use App\Http\Controllers\API\CreditoController;
use App\Http\Controllers\API\ClientesController;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\ProductosController;
use App\Http\Controllers\API\ProveedorController;
use App\Http\Controllers\API\FacturaVentaController;
use App\Http\Controllers\API\DetalleComprasController;
use App\Http\Controllers\API\FacturaComprasController;
use App\Http\Controllers\API\DetallesCreditoController;
use App\Http\Controllers\API\DetalleFacturaVentaController;
use App\Http\Controllers\API\DetalleFacturaCompraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('categorias',[CategoriaController::class,'index']);
Route::get('compras',[ComprasController::class,'index']);
Route::get('creditos',[CreditoController::class,'index']);
Route::get('detalle-compras',[DetalleComprasController::class,'index']);
Route::get('detalle-factura-compras',[DetalleFacturaCompraController::class,'index']);
Route::get('detalle-factura-ventas',[DetalleFacturaVentaController::class,'index']);
Route::get('detalle-creditos',[DetallesCreditoController::class,'index']);
Route::get('factura-compras',[FacturaComprasController::class,'index']);
Route::get('factura-ventas',[FacturaVentaController::class,'index']);
Route::get('productos',[ProductosController::class,'index']);
Route::get('ventas',[VentasController::class,'index']);
Route::get('proveedores',[ProveedorController::class,'index']);
