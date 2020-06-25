<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $b = Banner::all();
        return view('AdminLTE.Banners.banner', compact('b'));
    }

    public function store(Request $request)
    {
        $this->validate($request, ['banner' => 'required']);
        foreach ($request->file('banner') as $foto) {
            $fotos = new Banner();
            $fotos->banner = $foto->store('banners');
            $fotos->save();
        }
        return back()->with('success', 'Las fotos ha sido registradas correctamente');

    }

    public function destroy(Banner $foto)
    {
        Storage::delete($foto->url);
        $foto->delete();
        return back()->with('success', 'El banner ha sido eliminado correctamente');

    }
}
