<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Producto;
use App\Categoria;
use App\Informacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FiltradoController extends Controller
{
    public function filtrado_categoria(Categoria $categoria)
    {
        return view('welcome', [
            'mensaje' => "Productos de la categoria - $categoria->nombre_categoria",
            'mensaje2'=> "No se encontraron productos para esta categoria",
            'categorias' => Categoria::all(),
            'productos' =>$categoria->productos()->paginate(),
            'x'=> Informacion::all()
        ]);
    }


    public function eliminar_foto(Foto $foto)
    {
        Storage::delete($foto->url);
        $foto->delete();
        return back()->with('success', 'La fotografía del producto ha sido eliminada correctamente');

    }


    public function busqueda(Request $request)
    {
        $termino=$request->termino;
        if(!$termino)
        {
            return redirect()->route('inicio.tienda');
        }
            return view('welcome', [
                'mensaje' => "Los resultados de la búsqueda en base al termino '$termino' son :",
                'mensaje2'=> "No se encontraron productos que coincidieran con el término: ' $termino '",
                'categorias' => Categoria::all(),
                'termino' => $termino,
                'productos' => Producto::with('categoria','subcategoria','fotos')->NombreProducto($termino)->paginate(),
                'x'=> Informacion::all()
            ]);

    }

}
