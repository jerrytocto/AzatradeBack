<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscExportBasicInitController;
use App\Http\Controllers\ImBuscProduController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('buscar',[BuscExportBasicInitController::class,'buscar']); 
Route::post('importaciones/productos',[ImBuscProduController::class,'buscarProductoImport']);