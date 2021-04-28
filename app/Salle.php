<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function responsable_isets(){
        return $this->belongsTo('App\responsable_iset');
    }
}
