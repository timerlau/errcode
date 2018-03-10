# ErrorCode
<p>统一错误代码 for Laravel</p>

# 系统要求
````
php >= 5.5
laravel >= 5.4
````

# 说明
````
~ 统一的错误代码，方便管理
````

# 安装
````
composer require timerlau/errcode
````

# 配置文件
````
修改 config/app.php 如下：
1. providers 增加 Timerlau\Errcode\ErrcodeServiceProvider::class,
2. aliases   增加 'Errcode' => Timerlau\Errcode\Facades\Errcode::class,

php artisan vendor:publish --provider="Timerlau\Errcode\ErrcodeServiceProvider"
````

# 使用
````
use Errcode;

Errcode::success();     // 获取错误码信息
Errcode::success(true);     // 获取错误码代码
````