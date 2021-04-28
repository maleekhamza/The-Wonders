<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responsable_iset extends Model
{
    public function Salles(){
        return $this->hasMany('App\Salle');
    }
}
