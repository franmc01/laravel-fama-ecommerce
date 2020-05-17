<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Foto;
use App\Producto;
use App\SubCategoria;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos=Producto::with('categoria', 'subcategoria','fotos')->get();
       $F=Foto::all();
       return view('AdminLTE\Productos\index',compact('datos', 'F'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas=SubCategoria::all();
        $categorias=Categoria::all();
        return view('AdminLTE\Productos\create',compact('marcas','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'nombre'=> 'required',
                                   'descripcion'=> 'required',
                                   'codigo'=> 'required',
                                   'fecha'=> 'required',
                                   'categoria'=> 'required',
                                   'marca'=> 'required',
                                   'precio'=> 'required',
                                   'imagenes' => 'required',
                                   'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                                ]);
        $producto=new Producto();
        $producto->nombre_producto=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->codigo_unico=$request->codigo;
        $producto->precio=$request->precio;
        $producto->publicado=Carbon::parse($request->fecha);
        $producto->categoria_id=Categoria::find($cat=$request->categoria) ? $cat : Categoria::create(['nombre_categoria' => $cat])->id;
        $producto->subcategoria_id=SubCategoria::find($sub=$request->marca) ? $sub : SubCategoria::create(['nombre_sub' => $sub])->id;
        $producto->save();
        foreach ($request->file('imagenes') as $foto) {
            $fotos= new Foto();
            $fotos->producto_id=$producto->id;
            $fotos->url=$foto->store('product_img');
            $fotos->save();
            $optima = Image::make(Storage::get($fotos->url));
            $optima->widen(600)->encode();
            Storage::put($fotos->url, (string) $optima);
        }
        return back()->with('success', 'El producto ha sido registrado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $marcas=SubCategoria::all();
        $categorias=Categoria::all();
        $editado=Producto::with('categoria', 'subcategoria','fotos')->find($producto->id);
        return view('AdminLTE\Productos\edit', compact('editado','marcas','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $this->validate($request,[ 'nombre'=> 'required',
                                   'descripcion'=> 'required',
                                   'codigo'=> 'required',
                                   'fecha'=> 'required',
                                   'categoria'=> 'required',
                                   'marca'=> 'required',
                                    'precio' => 'required',
                                   'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                                ]);
        if ($request->file('imagenes')) {
            foreach ($request->file('imagenes') as $foto) {
                $fotos = new Foto();
                $fotos->producto_id = $producto->id;
                $fotos->url = $foto->store('product_img');
                $fotos->save();
                $optima = Image::make(Storage::get($fotos->url));
                $optima->widen(600)->encode();
                Storage::put($fotos->url, (string) $optima);
            }
        }
        $producto->nombre_producto=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->codigo_unico=$request->codigo;
        $producto->precio = $request->precio;
        $producto->publicado=Carbon::parse($request->fecha);
        $producto->categoria_id=Categoria::find($cat=$request->categoria) ? $cat : Categoria::create(['nombre_categoria' => $cat])->id;
        $producto->subcategoria_id=SubCategoria::find($sub=$request->marca) ? $sub : SubCategoria::create(['nombre_sub' => $sub])->id;
        $producto->save();
        return back()->with('success', 'El producto ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return back();
    }
}
