# 今日特卖SDK for thinkphp v6

## 安装
```
composer require isadmin/think-jinritemai
```

## 自用型应用
```php
use isadmin\ThinkJrtm\Jinritemai;

// 获取当前店铺信息
(new Jinritemai)->shop->currentShop();
```

## 工具型应用
```php
use isadmin\ThinkJrtm\Jinritemai;

(new Jinritemai)->setCode($code)->shop->currentShop();
```

## 更多支持的访问对象请参考[isadmin\jinritemai](https://github.com/isadmincn/jinritemai)
