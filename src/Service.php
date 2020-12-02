<?php
namespace isadmin\ThinkJrtm;

use think\Service as BaseService;

class Service extends BaseService
{
    public function register()
    {
        $this->app->bind('jinritemai', Jinritemai::class);
    }
}

