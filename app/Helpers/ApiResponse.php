<?php
namespace App\Helpers ; 

class ApiResponse
{
    public static function success($data = [], $message = 'Operación exitosa')
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], 200);
    }

    public static function error($message = 'Error', $code = 500)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }
}