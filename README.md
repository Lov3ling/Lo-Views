## Install

```
git clone https://github.com/Lov3ling/Lo-Views.git

composer update

composer dumpautoload
```

## Usage

### Route

路由支持闭包模式和控制器行为
```php
Route::get('/',function()
{
   return View('welcome');
});

Route::get('/test','index@index');
```

   ### View

```php
 return View('welcome',['data'=>'Lov-Views']);
```

模板试图中采用{{$data}} 渲染  

### Model

模型 

模型层采用Laravel的Eloquent模型,你可以参照Laravel的Eloquent模型取的数据库的数据

```
$data=User::where([status,1)->orderBy('name', 'desc')->get();
```




