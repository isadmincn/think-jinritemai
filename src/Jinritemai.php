<?php
namespace isadmin\ThinkJrtm;

use isadmin\Jinritemai\Application;

class Jinritemai extends Application
{
    public function __construct()
    {
        parent::__construct(config('jinritemai'));
    }
}
