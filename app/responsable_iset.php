<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable_iset extends Model
{
    protected $table = 'responsable_iset';
    public function Salles(){
        return $this->hasMany('App\Salle');
    }
}
