<?php

/*
 *          View视图函数
 */
function View($view,$data=null)
{
    $VIEWS=new \SSD\Blade\Blade(
        realpath(__DIR__."/../App/Views"),  /*  定义模板文件夹 */
        realpath(__DIR__."/../App/Cache")   /*  定义缓存文件夹 */
    );
    if($data==null)
    {
        echo $VIEWS->view($view);
    }
    else
    {
        echo $VIEWS->view($view,$data);
    }
};

/*
 *      加载静态文件
 */
function css(string $css)
{
    echo  "http://".$_SERVER['SERVER_NAME']."/".$css;
}

/*
 *      Session辅助函数
 */
function __Session()
{
    $Session=new \duncan3dc\Sessions\SessionInstance('Lo-Views');
    return $Session;
}
