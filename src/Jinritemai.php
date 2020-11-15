<?php
namespace isadmin\ThinkJrtm;

use isadmin\Jinritemai\Application;

class Jinritemai
{
    public static function instance()
    {
        return Application::make(config('jinritemai'));
    }
}
