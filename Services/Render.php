<?php

/*
 *          引用Laravel的Blade模板
 */

//use SSD\Blade\Blade;
class Render{

    /*
     *          创建Blade模板调用对象
     */
    protected static function run()
    {
        $View=new SSD\Blade\Blade(
            realpath(__DIR__."/../App/Views"),  /*  定义模板文件夹 */
            realpath(__DIR__."/../App/Cache")   /*  定义缓存文件夹 */
        );
        return $View;
    }




    /*
     *          判断是否存在数据
     *          限定数据必须为数组形式
     */
    public static function View($view, array $data=null)
    {
        if($data==null)
        {
            echo self::run()->view($view);
        }
        else
        {
            echo self::run()->view($view,$data);
        }
    }



    /*
     *          或者直接调用Blade模板引擎 这时候控制器应该使用echo来载入模板 而不是return
     */
    public static function Blade()
    {
        return self::run();
    }
}