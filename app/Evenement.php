<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table='evenements';

    public function evenements()
    {
        return $this->belongsTo('App\Evenement');
    }

}