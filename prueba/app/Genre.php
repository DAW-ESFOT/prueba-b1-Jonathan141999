<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function pelicula()
    {
        return $this->belongsTo('App\Pelicula');
    }
}
