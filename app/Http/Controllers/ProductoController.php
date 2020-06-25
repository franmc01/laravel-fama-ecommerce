<?php

namespace App\Http\Controllers;

use App\Foto;
use App\Marca;
use App\Submarca;
use App\Producto;
use Carbon\Carbon;
use App\Categoria;
use App\SubCategoria;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Producto::with('categoria', 'marca', 'fotos', 'subcategoria', 'submarca')->get();
        return view('AdminLTE.Productos.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = SubCategoria::all();
        $categorias = Categoria::all();
        $subcat = Marca::all();
        $subcat1 = Submarca::all();
        return view('AdminLTE.Productos.create', compact('marcas', 'categorias', 'subcat', 'subcat1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'mini' => 'required',
            'descripcion' => 'required',
            'codigo' => 'required',
            'fecha' => 'required',
            'categoria' => 'required',
            'marca' => 'required',
            'precio' => 'required',
            'imagenes' => 'required',
            'subcategoria' => 'required',
            'subcategoria1' => 'required',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $producto = new Producto();
        $producto->nombre_producto = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->review = $request->mini;
        $producto->codigo_unico = $request->codigo;
        $producto->precio = $request->precio;
        $producto->publicado = Carbon::parse($request->fecha);
        $producto->categoria_id = Categoria::find($cat = $request->categoria) ? ucwords(strtolower($cat)) : Categoria::create(['nombre_categoria' => ucwords(strtolower($cat))])->id;
        $producto->subcategoria_id = SubCategoria::find($sub = $request->marca) ? ucwords(strtolower($sub)) : SubCategoria::create(['nombre_sub' => ucwords(strtolower($sub))])->id;
        $producto->marca_id = $y = Marca::find($marca = $request->subcategoria) ? ucwords(strtolower($marca)) : $y = Marca::create(['nombre_marca' => ucwords(strtolower($marca)), 'categoria_id' => $producto->categoria_id])->id;
        $producto->submarca_id = Submarca::find($smarca = $request->subcategoria1) ? ucwords(strtolower($smarca)) : Submarca::create(['nombre_submarca' => ucwords(strtolower($smarca)), 'marca_id' => $y])->id;
        $producto->save();
        foreach ($request->file('imagenes') as $foto) {
            $fotos = new Foto();
            $fotos->producto_id = $producto->id;
            $fotos->url = $foto->store('product_img');
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
        $marcas = SubCategoria::all();
        $categorias = Categoria::all();
        $subcat = Marca::all();
        $subcat1 = Submarca::all();

        $editado = Producto::with('categoria', 'subcategoria', 'fotos')->find($producto->id);
        return view('AdminLTE.Productos.edit', compact('editado', 'marcas', 'categorias', 'subcat', 'subcat1'));
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
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required',
            'mini' => 'required',
            'codigo' => 'required',
            'fecha' => 'required',
            'categoria' => 'required',
            'marca' => 'required',
            'precio' => 'required',
            'subcategoria' => 'required',
            'subcategoria1' => 'required',
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

        $producto->nombre_producto = ucwords(strtolower($request->nombre));
        $producto->descripcion = $request->descripcion;
        $producto->review = $request->mini;
        $producto->codigo_unico = $request->codigo;
        $producto->precio = $request->precio;
        $producto->publicado = Carbon::parse($request->fecha);
        $producto->categoria_id = Categoria::find($cat = $request->categoria) ? ucwords(strtolower($cat)) : Categoria::create(['nombre_categoria' => ucwords(strtolower($cat))])->id;
        $producto->subcategoria_id = SubCategoria::find($sub = $request->marca) ? $sub : SubCategoria::create(['nombre_sub' => $sub  ])->id;
        $producto->marca_id = $y = Marca::find($marca = $request->subcategoria) ? ucwords(strtolower($marca)) : $y = Marca::create(['nombre_marca' => ucwords(strtolower($marca)), 'categoria_id' => $producto->categoria_id])->id;
        $producto->submarca_id = Submarca::find($smarca = $request->subcategoria1) ? ucwords(strtolower($smarca)) : Submarca::create(['nombre_submarca' => ucwords(strtolower($smarca)), 'marca_id' => $y])->id;
        $url = route('productos.edit', $producto);
        $producto->save();
        return redirect($url)->with('success', 'El producto ha sido actualizado correctamente');
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
        return back()->with('success', 'El producto ha sido eliminado correctamente');
    }

    public function findSubcategoria(Request $request)
    {
        if($request->ajax()){
            $subcat = Marca::where('categoria_id', '=', $request->id)->get();
            return response()->json(['data'=>$subcat]);
        }
    }

    public function findSubcategoria2(Request $request)
    {
        if($request->ajax()){
            $subcat2 = Submarca::where('marca_id', '=', $request->id)->get();
            return response()->json(['data'=>$subcat2]);
        }
    }
}
