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
        $cate->nombre_categoria= 'Escolar';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Motos';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Tecnología';
        $cate->save();

        $cate = new Categoria();
        $cate->nombre_categoria= 'Hogar';
        $cate->save();
    }
}
