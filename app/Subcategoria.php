<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $guarded = [];
    public function producto()
    {
        return $this->hasMany('App\Producto');
    }


}
