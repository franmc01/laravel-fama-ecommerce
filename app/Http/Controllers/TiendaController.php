<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Informacion;
use App\Producto;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TiendaController extends Controller
{

    public function index()
    {
        $favoritas=Categoria::all();

        return view('welcome', [
            'productos' => Producto::with('Categoria','Subcategoria','fotos')->paginate(),
            'categorias' => Categoria::orderBy('nombre_categoria','ASC')->get(),
            'chunk' => $favoritas->take(4),
            'x'=> Informacion::all()
        ]);
    }


    public function informacion($id)
    {
        $today= Carbon::now()->subWeek(1)->toDateString();
        return view('Secciones\info_producto', [
            'categorias' => Categoria::orderBy('nombre_categoria','ASC')->get(),
            'buscado' => Producto::with('categoria','subcategoria','fotos')->find($id),
            'nuevo' => Producto::with('categoria','subcategoria','fotos')->where('publicado', '>=' , $today )->get(),
            'x'=> Informacion::all()
        ]);
    }



}
