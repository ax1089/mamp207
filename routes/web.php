<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Event::listen('illuminate.query',function($query){
    var_dump($query);
});


//后台路由
Route::get('/user/add','UserController@add');  //访问路径，  然后控制器和方法名
Route::post('/user/insert','UserController@insert');


Route::get('/', function () {
    return view('welcome');
});


// //通过别名生成url 地址
Route::get('/test',function (){
    echo route('user.show',['id'=>100]);
});

//API接口路由
Route::get('/user/{id}','UserController@show');

//关于别名
Route::get('/adslddd/{id}','UserController@show')->name('user.show');

//中间件
Route::get('/users','UserController@index')->middleware('login');





//资源控制器  一条顶七条
Route::resource('tiezi','TieziController');
Route::get('/request','TieziController@request');
Route::get('/form','TieziController@form');
Route::post('/upload','TieziController@upload');




/*
    DELETE / HTTP/1.1
    PUT / HTTP/1.1

 */
Route::get('/login',function (){
    return 'login page';
});

Route::get('/index.asp',function (){
   return 'asp??????';
});




//以下两条路由用于中间件
//    //关于更新
//    Route::get('/update',function (){
//        echo 'update';
//    })->middleware('login');
//
//    //关于更新
//    Route::get('/delete',function (){
//        echo 'delete';
//    })->middleware('login');
//以下两条路由用于中间件






//前台路由
//Route::group([],function (){
//
//    Route::get('/', function () {
//        return view('welcome');
//    });
//
//    //关于更新
//    Route::get('/update',function (){
//        echo 'update';
//    })->middleware('login');
//
//    //关于更新
//    Route::get('/delete',function (){
//        echo 'delete';
//    })->middleware('login');
//
//    Route::get('/user/{id}',function ($id){
//        echo '用户id为'.$id;
//    })->where('id','\d+');
//
//
//    //给路由创建别名
//    Route::get('/admin',function (){
//        return '这里是后台页面';
//    })->name('admin');
//
//    //创建URL的时候
//    Route::get('/home',function (){
//       return '<a href="'.route('admin').'">后台</a>';
//    });
//
//    Route::get('/404',function (){
//       if (empty($_GET['id'])){
//           abort(404);
//       }
//    });
//});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/cookie','HomeController@set');



//闪存
Route::get('/falsh','HomeController@falsh');
Route::get('/get-falsh','HomeController@getFlash');
Route::get('/user-2','HomeController@user');
Route::post('/user-2','HomeController@insert');


//视图
Route::get('/response','HomeController@response');
Route::get('/views','HomeController@views');


//模版继承
Route::get('/pages-1','HomeController@pages1');
Route::get('/pages-2','HomeController@pages2');

//流程控制
Route::get('/control','HomeController@control');


//数据库操作
Route::get('/select','DBController@select');
Route::get('/trans','DBController@trans');

//关于join的使用
Route::get('/join','DBController@join');




