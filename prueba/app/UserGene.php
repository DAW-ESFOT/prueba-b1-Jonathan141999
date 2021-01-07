<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGene extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
