<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    public function utilisateurs()
    {
        return $this->belongsTo('App\Utilisateur');
    }
}
