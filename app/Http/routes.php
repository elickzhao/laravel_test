<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

 Route::get('home', function () {
     return view('welcome');
 });
Route::get('/','ArticleController@index');


Route::get('/user/{name?}',function($name='elick zhao'){
	return 'Hello,'.$name;
});

Route::get('/name',function(){
	return view('articles.lists',['title' => 'James']);
});

Route::get('/name',"ArticleController@index");

/**
 * 这个路由分组跟我想的不太一样  我想的是把相同前缀放到一起 比如  admin/user,admin/goods
 * 但其实分组的目的就是为了加相同属性或者过滤 所以才放到分组下面管理
**/
Route::group(['as'=>'admin::'],function(){
    Route::get('aa',['as'=>'aa',function(){
        return "this is  aa";
    }]);
});

//Route::get("admin","Admin\AdminController@index");
//Route::group(['namespace'=>'Admin'],function(){
//    //Class App\Http\Controllers\Admin\Admin\AdminController does not exist
//    //Route::get("admin","Admin\AdminController@indexAdminController@index");
//    Route::get("admin","AdminController@index"); //这不错挺方便的 如果放在一个目录下面 不用每一个都去写这个目录名了
//});

//没有指定域名没法测试
//这个用本地hosts改了 不过还是没测试成功
//Route::group(['domain'=>'{account}.myapp.com'],function(){
//    Route::get('user/{id}',function($account,$id){
//        echo $account,"---",$id;
//    });
//});

//这个修改前缀是我想要的那个功能
//就是把统一的路由全放在一个下面
//而且和我想的一样和上面的命名空间可以合并使用
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('user',function(){
       echo "admin/user";
    });

    Route::get('index',"AdminController@index");
});

Route::get("profile/{art}",function(App\Article $article){
    return $article->content;
});

//以get的方式的参数不知道如何放到中间件里
//可以了 用Request的获取uri然后获取参数
//$request->segment(2)
Route::get("oldman/{age}",['middleware'=>'old',function($age){
    echo "我现在".$age."岁!!!";
}]);

Route::get('blade',function(){
    return view('layouts.child');
});

Route::get('model',function(){
    $s = App\Staff::class;
    $r = $s::find(1);
    $rr = $r->photos;
    dump($rr);


});

Route::get('model2',function(){
    /*
     * 多态多关联
     * */
    $post = App\Post::find(1);
    dump($post->tags->toArray());

    $tag = App\Tag::find(1);
    dump($tag->posts->toArray());
});

/*
 * 关联查询
 * */
Route::get('gl',function(){
    //有评论的文章  或者对于这个 是  有飞机的航线
    //这个has获得的还是本表的内容 has只是个条件 不能获得子表内容
    $f = App\Flight::has('fly')->get();
    dump($f);
    //这个才是获得子表的结果
    $fly = App\Flight::find(1)->fly;
    dump($fly->toArray());
    //这个是错的'.'这个点不是这个表的单元 而是这个类的子关系
    //比如 文章的->评论->投票  也就是获得评论的投票
    //$f = App\Flight::has('fly.f_id')->get();
});

/*
 * 渴求式加载
 * */
Route::get('kq',function(){
    //获取子表内容循环而出 不过每次循环都得查询一下数据库
//    $flys = App\Flys::all();
//    foreach($flys as $fly){
//        echo $fly->flight->name."<br>";
//    }

    //查询子表 但是把已知结果集放到sql里 所以只查询两次
    //select * from `flys`1
    //select * from `my_flights` where `my_flights`.`airline` in ('383', '1024', '256', '888', '456')
    $flys = App\Flys::with('flight')->get();
    foreach($flys as $fly){
        echo $fly->flight->name."<br>";
    }
});

/*
 * 关联插入
 * */
Route::get('glcr',function(){
//    $flight = new App\Flight(['name'=>'东南航空']);
//    $fly = App\Flys::find(4);
//    $r = $fly->flight()->save($flight);
    $flight = App\Flight::find(11);
//    $fly = new App\Flys(['f_id'=>'2048']);
//    $r = $flight->fly()->save($fly);
    $r = $flight->fly()->saveMany([
        new App\Flys(['f_id'=>'saveMany1']),
        new App\Flys(['f_id'=>'saveMany2'])
    ]);
    dump($r);
});

/*
 * 访问器
 * */
Route::get('fwq',function(){
    $r = App\Article::find(5)->title;
    dump($r);
});

/*
 * 修改器
 * */

Route::get('xgq',function(){
    $r = App\Article::find(1);
    $r->intro = 'ELICK';
    $r->save();
    dump($r);
});


/**
 * 日期修改器
 */
Route::get('rqxgq',function(){
    //只有在模型文件里设置 $dates 才可以直接使用Carbon类型
    //自带的created_at和updated_at不受限制 也就是不放在数组里也没关系
    $article = App\Article::find(1);
    return $article->published_at->getTimestamp();
});

/**
 * 序列号
 */

Route::get('xlh',function(){
   $user = App\User::find(1);
    //return $user->toJson();
    //return (string)$user;
    //隐藏属性这样是可以看见的
    //dump($user->password);
    return App\User::all();
});

// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile',['middleware'=>'auth.basic',function(){
    echo '爱爱爱';
}]);