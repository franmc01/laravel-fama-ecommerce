<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Informacion;
use App\Producto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Banner;

class TiendaController extends Controller
{

    public function index()
    {
        $favoritas=Categoria::all();
        return view('welcome', [
            'productos' => Producto::with('Categoria','Subcategoria','fotos')->paginate(8),
            'categorias' => Categoria::with('marcas')->orderBy('nombre_categoria','ASC')->get(),
            'cantidad' => Categoria::with('marcas')->count(),
            'chunk' => $favoritas->take(4),
            'x'=> Informacion::all(),
            'historias' => Banner::all()
        ]);
    }


    public function informacion($id)
    {
        $today= Carbon::now()->subWeek(1)->toDateString();
        return view('Secciones.info_producto', [
            'categorias' => Categoria::orderBy('nombre_categoria','ASC')->get(),
            'buscado' => Producto::with('categoria','subcategoria','fotos')->find($id),
            'nuevo' => Producto::with('categoria','subcategoria','fotos')->where('publicado', '>=' , $today )->get(),
            'x'=> Informacion::all()
        ]);
    }

}
