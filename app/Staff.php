<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    function photos(){
        return $this->morphToMany('App\Photo','imageable');
    }
}
