<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public function producto()
    {
        return $this->hasMany('App\Producto');
    }

}
