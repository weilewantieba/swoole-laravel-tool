<?php

/**
 * Created by PhpStorm.
 * User: SiYuan
 * Date: 2017/10/14
 * Time: 上午10:05
 */
namespace swoolelaravel\Server\Provider;
use Illuminate\Support\ServiceProvider;

class SwooleLogServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('swoolelog',function(){
            return new SwooleLog();
        });

    }

}