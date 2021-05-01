<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function Responsable_isets(){
        return $this->belongsTo('App\responsable_iset');
    }
}
