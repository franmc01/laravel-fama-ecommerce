<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submarca extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function producto_submarca()
    {
        return $this->hasMany('App\Producto');
    }

    public function getRouteKeyName()
    {

        return 'nombre_submarca';
    }
}
