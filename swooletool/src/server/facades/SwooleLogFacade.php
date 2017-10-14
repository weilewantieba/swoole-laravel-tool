<?php

/**
 * Created by PhpStorm.
 * User: SiYuan
 * Date: 2017/10/14
 * Time: 上午10:02
 */

use Illuminate\Support\Facades\Facade;
class SwooleLogFacade
{
    protected static function getFacadeAccessor()
    {
        return 'swooleLog';
    }

}