<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //默认模版输出值  所有模版都会有这个
        view()->share('title', '我要学laravel');

        //自定义blade命令
        Blade::directive('datetime',function($expression){
            return "<?php echo date('Y-m-d H:i',time()); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
