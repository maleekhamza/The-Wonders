<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resp_media extends Model
{
    protected $table='resp_medias';

    public function club()
    {
        return $this->belongsTo('App\Resp_media');
    }
}
