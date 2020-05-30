<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function categoriax()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function producto(){
        return $this->hasMany('App\Producto');
    }

    public function submarca(){
        return $this->hasMany('App\Submarca');
    }

}
