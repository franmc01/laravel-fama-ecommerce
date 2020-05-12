<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $guarded=[];

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }

}
