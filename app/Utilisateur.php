<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    public function propositions()
    {
        return $this->hasMany('App\Proposition');
    }
}
