<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $fillable = ['name','code','year','available'];
    public function genres()
    {
        return $this->hasMany('App\Genre');
    }
}

