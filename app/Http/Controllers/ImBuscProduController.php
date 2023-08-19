<?php

namespace App\Http\Controllers;

use App\Models\ImBuscProduModel;
use Illuminate\Http\Request;
use App\Helpers\ApiResponse;
use Spatie\FlareClient\Api;

class ImBuscProduController extends Controller
{
    public function buscarProductoImport(Request $request){

        try{
            $anio = $request->input('anio');
            $producto = $request->input('producto');

            $productos = ImBuscProduModel::buscarProductoImport($anio,$producto);

            if(empty($productos)){
                return ApiResponse::success([],'No se encontraron registros');  
            }       
            return ApiResponse::success($productos,'Operación exitosa'); 
        }catch(\Exception $e){
            return ApiResponse::error('Error al obtener los productos',500);
        }
        
    }
}
