<?php

/*  定义根目录   */
define('ROOT',__DIR__);


/*
 *      注册全局函数
 */
require_once __DIR__."/../Global/Function.php";

require_once __DIR__."/../config/setting.php";

/*
 *      载入启动器
 */
require_once ROOT."/../bootstrap.php";


/*
 *      分配路由
 */
require_once BOOT."/config/routes.php";


/*
 *      错误模式
 */
require_once BOOT."/config/errors.php";

