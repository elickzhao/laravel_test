<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    protected $table = 'my_flights';
    //这个限制只决定怎么插入到数据库 不决定怎么取出数据
    protected $dateFormat = 'Y-m-d';

    protected $guarded = ['created_at','updated_at'];
    function getName(){
        DB::table('users')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('orders')
                    ->whereRaw('orders.user_id = users.id');
            })
            ->get();

        //select * from users where exists (select 1 from orders where orders.user_id = users.id)
        //生成上面那句语句  exists 判断括号内语句是否为真  为真则搜索 为假则放弃

    }

    public function fly(){
        //外键一般用当前模型的表名加ID 例如 flight_id
        //这个外键是int类型或者是varchar类型都可以
        //第三个参数是表内关联的键  也是就是当期模型的表所含的字段  外键是关联外部的表所含的字段
        return $this->hasOne('App\Flys','flight_fid','airline');
    }
}
