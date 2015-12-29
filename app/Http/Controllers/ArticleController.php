<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::all();
        //return $articles;
        $title = '文章副标题!!';
//        $arr = array('title'=>'文章副标题!!','name'=>'wo shi name!!!');
//        return view('articles.lists',$arr);
        // //这两个方法都可以传值  一个是在括号内数组传值  另一个是with  最后一个是compact
        //AppServiceProvider里view()->share('title', '我要学laravel'); 默认title值如果这里不赋值就会显示那个
        return view('articles.lists', ['name' => '<span style="color:blue">elick</span>'])->with('title', $title);
        // $name = '<span style="color:blue">elick</span>';
        //return view('articles.lists',compact('title','name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return ("hello world");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
