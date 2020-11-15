<?php

use isadmin\Jinritemai\Enum\AppType;

return [
    'app' => [
        'app_key' => '',
        'app_secret' => '',
        // 默认
        'version' => '2',
        // 应用类型，AppType::SELF_APP为自用型应用，AppType::TOOL_APP为工具型应用
        'type'    => AppType::TOOL_APP,
    ],
    'request' => [
        'timeout' => 30.0,
        'base_uri' => 'https://openapi-fxg.jinritemai.com',
    ],
    'oauth' => [
        'url' => 'https://fxg.jinritemai.com/index.html#/ffa/open/applicationAuthorize',
    ],
];
