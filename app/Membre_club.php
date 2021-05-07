<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre_club extends Model
{
    //protected $table='Membre_club';

    public function membre_clubs()
    {
        return $this->belongsTo('App\Membre_club');
    }

}
