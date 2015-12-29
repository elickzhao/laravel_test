<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request->segment(2));
        //$request->input('age') 原版用的这个对应的应该是post 我用get方法所以用上面那个
        if($request->segment(2) >= 200){
            return redirect('/');
        }
        return $next($request);
    }
}
