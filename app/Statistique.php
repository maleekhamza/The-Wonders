<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistique extends Model
{
    
        protected $table='statistiques';
    
        public function statistique()
        {
            return $this->belongsTo('App\statistique');
        }
    
   
    
}
