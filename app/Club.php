<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function resp_medias()
    {
        return $this->hasMany('App\Resp_media');
    }
}
