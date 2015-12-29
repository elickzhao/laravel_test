<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    function imageable(){
        return $this->morphTo();
    }
}

