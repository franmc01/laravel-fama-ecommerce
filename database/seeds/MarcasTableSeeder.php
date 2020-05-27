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
        $marca->nombre_marca='Accesorios de protección';
        $marca->categoria_id=3;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Muebles';
        $marca->categoria_id=4;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Dormitorio';
        $marca->categoria_id=4;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Complementos de cocina y baño';
        $marca->categoria_id=4;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Complementos de ferretería';
        $marca->categoria_id=4;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Equipos médicos';
        $marca->categoria_id=5;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Complementos médicos';
        $marca->categoria_id=5;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Computadoras';
        $marca->categoria_id=6;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Teléfonos';
        $marca->categoria_id=6;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Scanner e impresoras';
        $marca->categoria_id=6;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Accesorios';
        $marca->categoria_id=6;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Útiles escolares';
        $marca->categoria_id=7;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Textos escolares';
        $marca->categoria_id=7;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Cuadernos';
        $marca->categoria_id=7;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Coches';
        $marca->categoria_id=8;
        $marca->save();

        $marca= new Marca();
        $marca->nombre_marca='Juguetes y coleccionables';
        $marca->categoria_id=8;
        $marca->save();
    }
}
