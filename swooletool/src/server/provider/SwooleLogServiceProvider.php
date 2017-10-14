<?php

/**
 * Created by PhpStorm.
 * User: SiYuan
 * Date: 2017/10/14
 * Time: 上午10:05
 */
namespace Swoolelaravel\Server\Provider;
use Illuminate\Support\ServiceProvider;
use Swoolelaravel\Server\Core\SwooleLog;

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