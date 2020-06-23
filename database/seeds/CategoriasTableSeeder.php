<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate = new Categoria();
        $cate->nombre_categoria= 'Electrodomésticos';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'TV, Audio y video';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Movilidad';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Hogar y bebés';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Insumos médicos';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Tecnología';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Librería y oficina';
        $cate->save();


    }
}
