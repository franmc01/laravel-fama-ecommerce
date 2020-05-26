<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submarca extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }
}
