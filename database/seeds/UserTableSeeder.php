<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        factory('App\User',50)->create()->each(function($u){
//            $u->posts()->save(factory('App\Post')->make());
//        });
        //这样就可以生成测试数据了
        //以为laravel自带user的factory
        factory(\App\User::class,10)->create();
    }
}
