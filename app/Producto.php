<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public $timestamps = false;

    public function getRouteKeyName(){ return 'nombre_producto'; }

    public function categoria() { return $this->belongsTo('App\Categoria'); }

    public function subcategoria() { return $this->belongsTo('App\Subcategoria'); }

    public function marca() { return $this->belongsTo('App\Marca'); }

    public function submarca() { return $this->belongsTo('App\Submarca'); }

    public function fotos() { return $this->hasMany('App\Foto'); }


    public function scopeNombreProducto($query, $nombre)
    {
        if($nombre){
            return $query->where('nombre_producto', 'LIKE' , "%$nombre%");
        }
    }

}
