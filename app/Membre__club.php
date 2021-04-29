<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre__club extends Model
{
    public function Evenement()
    {
        return $this->belongsToMany('App\Membre__club');
    }
}
