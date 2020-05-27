<?php

use App\Marca;
use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca= new Marca();
        $marca->nombre_marca='Refrigeración';
        $marca->categoria_id=1;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Lavado y secado';
        $marca->categoria_id=1;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Climatización';
        $marca->categoria_id=1;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Mini-electrodomésticos';
        $marca->categoria_id=1;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Televisores';
        $marca->categoria_id=2;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Audio';
        $marca->categoria_id=2;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Videojuegos';
        $marca->categoria_id=2;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Bicicletas';
        $marca->categoria_id=3;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Motos';
        $marca->categoria_id=3;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Accesorios';
        $marca->categoria_id=3;
        $marca->save();
    }
}
