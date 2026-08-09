<?php

namespace App\Models;

use Illuminate\Support\Focades\Storage;

class Lugar
{
    public static function all()
    {
        $json = Storage::get('lugares.json');
        return json_decode($json, true);
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