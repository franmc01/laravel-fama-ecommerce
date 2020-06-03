<?php

use App\Submarca;
use Illuminate\Database\Seeder;

class SubmarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub = new Submarca();
        $sub->nombre_submarca = 'Andadores';
        $sub->marca_id = 25;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Coches';
        $sub->marca_id = 25;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Correpasillos';
        $sub->marca_id = 25;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Mosquiteros para coches de bebé';
        $sub->marca_id = 25;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Pañaleras y más';
        $sub->marca_id = 25;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Bolsas de lego de construcción';
        $sub->marca_id = 26;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Carros a control remoto';
        $sub->marca_id = 26;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Juguetes de baño';
        $sub->marca_id = 26;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Sonajeros y maracas';
        $sub->marca_id = 26;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Congeladores';
        $sub->marca_id = 1;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Refrigeradoras';
        $sub->marca_id = 1;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Vitrinas y minibares';
        $sub->marca_id = 1;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Lavadoras';
        $sub->marca_id = 2;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Secadoras';
        $sub->marca_id = 2;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Torre de lavado';
        $sub->marca_id = 2;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Acondicionadores de aire split';
        $sub->marca_id = 3;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Acondicionadores de aire de ventana';
        $sub->marca_id = 3;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Ventiladores';
        $sub->marca_id = 3;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Cocinas a gas';
        $sub->marca_id = 4;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Cocinas eléctricas';
        $sub->marca_id = 4;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Encimeras';
        $sub->marca_id = 4;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Hornos y lavavajillas';
        $sub->marca_id = 4;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Batidoras';
        $sub->marca_id = 5;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Cafeteras';
        $sub->marca_id = 5;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Dispensadores de agua';
        $sub->marca_id = 5;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Licuadoras';
        $sub->marca_id = 5;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Plancas';
        $sub->marca_id = 5;
        $sub->save();

        $sub = new Submarca();
        $sub->nombre_submarca = 'Sanducheras y Wafleras';
        $sub->marca_id = 5;
        $sub->save();
    }
}
