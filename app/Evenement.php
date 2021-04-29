<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function Membre__club()
    {
        return $this->belongsToMany('App\Evenement');
    }
   
}
