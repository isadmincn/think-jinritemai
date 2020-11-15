<?php
namespace isadmin\ThinkJrtm;

use isadmin\jinritemai\Application;

class Jinritemai
{
    public static function instance()
    {
        return Application::make(config('jinritemai'));
    }
}
