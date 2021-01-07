<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];
    public function usergene()
    {
        return $this->hasMany('App\Genre');
    }
    public function pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }

}
