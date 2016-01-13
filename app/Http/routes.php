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

/*
 * collect集合演示
 */
Route::get("collect",function(){
    $collection = collect([1, 2, 3, 4, 5]);

    //map是遍历整个数组 并把操作结果返回给数组
    $multiplied = $collection->map(function ($item) {
        return $item * 2;
    });

    //each是遍历整个集合 但是不做返回新数组动作
//    $mu = $collection->each(function($item,$key){
//        //$mu 是集合的实例 不是数组所以不能往里写入
//        $mu[$key] = $item * 4;
//        //$this->put($key,$item * 4);
//    });
//    dump($mu->all());
//    return $multiplied->all();

    //-----------------------------------

//    $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
//    $collapsed = $collection->collapse();
//
//    $flatten = $collection->flatten();
//    dump($flatten->all());
//
//    $collection1 = collect(['name' => 'taylor', 'languages' => ['php', 'javascript']]);
//    $flattened1 = $collection1->flatten();
//    //这种带下标的collapse 就不可以所以记住flatten是最省事的 因为两种都能合并
//    //$flattened1 = $collection1->collapse();
      //注意：不同于大多数其它集合方法，transform修改集合本身，如果你想要创建一个新的集合，使用map方法。
//    这个用法也是类似的 每个单元操作后返回给原数组
//    $collection->transform(function ($item, $key) {
//         return $item * 2;
//    });
//    dump($flattened1->all());
//
//    dump($collapsed->all());

    //------------------------------------

//    $collection = collect([5, 3, 1, 2, 4]);
//    $sorted = $collection->sort();
//    //只是按值升序排列但是不改变下标,下标是字符串
//    dump($sorted->all());
//    dump($sorted->values()->all());

//    $collection = collect(['name' => 'Desk', 'price' => 200]);
//    //好像没有区别 可能版本升级改了吧
//    dump($collection->toArray());
//    dump($collection->all());

    //这个叫去重更合适些
    $collection = collect([1, 1, 2, 2, 3, 4, 2]);
    $unique = $collection->unique();
    dump($unique->values()->all());


});