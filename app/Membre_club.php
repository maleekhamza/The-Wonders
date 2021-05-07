<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre_club extends Model
{
   // protected $table='membre__clubs';

    public function membre_clubs()
    {
        return $this->belongsTo('App\Membre_club');
    }

}
