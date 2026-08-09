<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;

class CatalogoController extends Controller
{
    public function index()
    {
        $lugares = Lugar::all();
        return view('catalogo.index', compact('lugares'));
    }

    public function show($id)
    {
        $lugar = Lugar::find($id);

        if (!$lugar){
            abort(404, 'Lugar turístico no encontrado');
        }

        return view('catalogo.detalle', compact('lugar'));
    }
}
