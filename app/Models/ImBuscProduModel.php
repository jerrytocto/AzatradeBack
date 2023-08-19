<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImBuscProduModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'anio','partNandi','vFob','pNeto','qunifis','tunicomMax',
        'anyPesoNeto','descripcion','precioporkl'
    ];

    public static function buscarProductoImport($anio,$producto){
        return DB::select('CALL sp_im_busc_produ(?,?)',[$anio,$producto]);
    }
}
