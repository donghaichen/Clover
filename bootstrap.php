<?php

/*
|--------------------------------------------------------------------------
|(APP)应用引导文件
|--------------------------------------------------------------------------
|
| 目前只支持MYSQL,未来可能会增加对NOSQL的支持
|
*/
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as DB;

require_once __DIR__ . '/vendor/autoload.php';


$db = new DB;

/*
|--------------------------------------------------------------------------
| 创建链接
|--------------------------------------------------------------------------
|
| 创建链接
|
*/

$db->addConnection($database);

/*
|--------------------------------------------------------------------------
| 设置全局静态可访问
|--------------------------------------------------------------------------
|
| 设置全局静态可访问
|
*/

$db->setAsGlobal();

/*
|--------------------------------------------------------------------------
| 启动Eloquent
|--------------------------------------------------------------------------
|
| 启动Eloquent
|
*/

$db->bootEloquent();


/*
|--------------------------------------------------------------------------
| 加载 Application Routes（路由）
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

//$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
//    require __DIR__.'/../app/Config/route.php';
//});
//
//try {
//    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
//} catch (Dotenv\Exception\InvalidPathException $e) {
//    //
//}

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/
//
//$app = new Laravel\Lumen\Application(
//    realpath(__DIR__.'/../')
//);

return $app;
