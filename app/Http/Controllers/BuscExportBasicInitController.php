<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuscExportBasicInitModel;

class BuscExportBasicInitController extends Controller
{
    public function buscar(Request $request){
        $anio = $request->input('anio');
        $producto = $request->input('producto');

        $productos = BuscExportBasicInitModel::buscar($anio,$producto); 

        return response()->json($productos);
    }
}
