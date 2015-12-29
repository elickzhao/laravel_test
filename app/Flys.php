<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flys extends Model
{
    //
    protected $fillable = ['f_id'];
    function flight()
    {
        //默认外键为flight_id  这里的外键还是相对于Flight来说的  这是因为这个是belongsTO从属表  所以外键是位于表内字段
        //return $this->belongsTo('App\Flight','f_id','airline');
        //这里内键也是相对Flight说 其实是Flight的内部字段
        return $this->belongsTo('App\Flight','flight_fid','airline');

    }
}
