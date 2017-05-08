<?php
/*
 *
 *		Routes
 *
 */



/*
 *      引入Macaw 重命名为Route
 */

use NoahBuscher\Macaw\Macaw as Route;


/*
 *          闭包模式
 */
/*
Route::get('/', function() {
   //return Render::View('welcome');
    echo View('welcome',['data'=>'Lo-Views']);
});
*/

/*
 *              控制器模型
 */
Route::get('/','Controller@index');
Route::get('/test','Controller@test');

/*
 *          404  路由未定义错误
 */

/*Route::error(function (){
    View('welcome',['data'=>"404 Not Find"]);
});*/

Route::$error_callback=function ()
{
    View('welcome',['data'=>"404 Not Find"]);
};


Route::dispatch();