<?php
namespace Siyuan\Swoolelaravel\Server\Facades;


use Illuminate\Support\Facades\Facade;
/**
 * Created by PhpStorm.
 * User: SiYuan
 * Date: 2017/10/14
 * Time: 下午2:40
 */
class SwooleLogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swoolelog';
    }
}