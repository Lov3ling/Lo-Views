<?php
/**
 * Created by PhpStorm.
 * User: LeeVi
 * Date: 2017/4/25 0025
 * Time: 22:08
 */

/*  引用Eloquent   */
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;


/*
 *      定义启动目录
 */
define('BOOT',__DIR__);


/*
 *      Autoload    自动类加载
 */
require_once BOOT."/vendor/autoload.php";

/*
 *      创建Manager对象
 */

$dome=new Capsule();

/*
 *      数据库配置文件
 */
$dome->addConnection(require_once BOOT.'/config/database.php');


/*
 *      Eloquent模型组件
 */
$dome->setEventDispatcher(new Dispatcher(new Container));
$dome->setAsGlobal();
$dome->bootEloquent();



/*
 *      whoop错误组件
 */

if(DEBUG==true)
{
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}else{
    ini_set("display_errors","Off");

}
/*
 *
 */


