<?php

namespace App\Models;

class Lugar
{
    public static function all()
    {
        $ruta = storage_path('app/lugares.json');
        
        if (!file_exists($ruta)) {
            dd("ERROR: Laravel no encuentra el archivo. Ruta exacta donde buscó: " . $ruta);
        }

        $json = file_get_contents($ruta);
        $datos = json_decode($json, true);

        if ($datos === null) {
            dd("ERROR DE LECTURA: El archivo sí existe, pero el texto JSON está corrupto: " . json_last_error_msg());
        }

        return $datos;
    }

    public static function find($id)
    {
        $lugares = self::all();

        foreach ($lugares as $lugar) {
            if ($lugar['id'] == $id) {
                return $lugar;
            }
        }

        return null;
    }
}