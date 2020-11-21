<?php

use isadmin\Jinritemai\Enum\AppType;

return [
    'app_key' => '',
    'app_secret' => '',
    'app' => [
        'version' => '2',
        'type'    => AppType::TOOL_APP,
    ],
    'request' => [
        'timeout' => 30.0,
        'base_uri' => 'https://openapi-fxg.jinritemai.com',
    ],
    'oauth_base_url' => 'https://fxg.jinritemai.com/index.html#/ffa/open/applicationAuthorize',
];
