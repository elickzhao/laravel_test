<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /**
     * 可以直接保存的字段
     * @var array
     */
    protected $fillable = ['title','intro','content','published_at'];


    /**
     * 日期修改器
     * @var array
     */
    protected $dates = ['published_at'];

    /*
     * 访问器
     * */
    public function getTitleAttribute($value){
        return ucfirst($value);
    }

    /*
     * 修改器
     * 只有在修改相关属性时才触发
     * */
    public function setIntroAttribute($value){
        return $this->attributes['intro'] = strtolower($value);
        //下面这个写法是错误的
        //return strtolower($value);
    }

}
