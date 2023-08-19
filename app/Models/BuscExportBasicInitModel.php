<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BuscExportBasicInitModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'partida', 'descrip', 'sumfob', 'pneto', 'precioXunid'
    ];
    
    public static function buscar($anio, $producto)
    {
        return DB::select('CALL sp_busc_export_basic_ini(?, ?)', [$anio, $producto]);
    }
}
