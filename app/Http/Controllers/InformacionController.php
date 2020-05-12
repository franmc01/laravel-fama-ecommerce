<?php

namespace App\Http\Controllers;

use App\Informacion;
use Illuminate\Http\Request;
use App\Categoria;
use App\SubCategoria;
use App\Producto;

class InformacionController extends Controller
{
    public function editar_info()
    {
        $edicion=Informacion::all();
        return view('Secciones\info_edit',compact('edicion'));
    }


    public function update_info(Request $request , $id)
    {

        $this->validate($request,[
            'celular'=> 'required',
            'telefono'=> 'required',
            'correo'=> 'required',
            'facebook'=> 'required',
            'twitter'=> 'required',
            'telefono'=> 'required',
            'horariosemana_abrir'=> 'required',
            'horariosemana_cerrar'=> 'required',
            'horariofinsemana_abrir'=> 'required',
            'horariofinsemana_cerrar'=> 'required',
        ]);

        $objetivo=Informacion::find($id);
        $objetivo->celular = $request->celular;
        $objetivo->telefono = $request->telefono;
        $objetivo->correo = $request->correo;
        $objetivo->facebook = $request->facebook;
        $objetivo->twitter = $request->twitter;
        $objetivo->horariosemana_abrir = $request->horariosemana_abrir;
        $objetivo->horariosemana_cerrar = $request->horariosemana_cerrar;
        $objetivo->horariofinsemana_abrir = $request->horariofinsemana_abrir;
        $objetivo->horariofinsemana_cerrar = $request->horariofinsemana_cerrar;
        $objetivo->save();
        return back()->with('success', 'La información ha sido actualizada correctamente');
    }


    public function contador()
    {
        $a=Categoria::all()->count();
        $b=Producto::all()->count();
        $c=SubCategoria::all()->count();

        return view('Secciones\dashboard', compact('a','b','c'));

    }

}
