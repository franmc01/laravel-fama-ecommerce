<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    public function getRouteKeyName()
    {

        return 'nombre_categoria';
    }

        public function marca()
    {
        return $this->hasMany('App\Marca');
    }
}
