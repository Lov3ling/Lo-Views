# Lo-Views
-*-By:Lov3  
-*-Date:2017-05-08
==============================================
   利用Composer写的一个微框架
   有点仿照Laravel,

   完成的部分
* Model 
* Controller 
* View 
* Session 
* Route


   Composer update安装依赖
  
   数据库

   模型层采用Laravel的Eloquent模型,你可以参照Laravel的Eloquent模型取的数据库的数据

    $data=contents::all();

    
   视图
   
   视图层的灵感来自Laravel的Blade模板
   
   
   你可以这样在控制器通过View传送数据到模板

   return View('welcome',['data'=>'Lov-Views']);
   
   

   blade模板引擎也与Laravel一样,你可以这样取得数据
   
   
   {{ $data }}
   
   
   路由

   路由也支持闭包模式和控制器行为

   
   Route::get('/',function()
   {
      return View('welcome');
   });
   
   
   Route::get('/test','index@index');
   


#[By Lov3](http://www.lov3ling.com)  



