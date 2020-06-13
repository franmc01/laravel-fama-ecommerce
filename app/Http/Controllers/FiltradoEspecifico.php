<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submarca;
use App\Categoria;
use App\Foto;
use App\Informacion;
use App\Producto;

class FiltradoEspecifico extends Controller
{
    public function filtrado_marcas(Submarca $submarca)
    {
        // return $submarca;
        return view('welcome', [
            'mensaje' => "Productos de la sección - $submarca->nombre_submarca",
            'mensaje2' => "No se encontraron productos para esta sección de los productos",
            'categorias' => Categoria::all(),
            'productos' => $submarca->producto_submarca()->paginate(),
            'x' => Informacion::all(),
        ]);
    }
}
