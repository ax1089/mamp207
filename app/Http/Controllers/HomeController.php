<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function set(){
        //设置
        //setcookie('name','lee',time()+3600,'/');
//        \Cookie::queue('name-2','leiwencai',10);
//        return response('<p>我是响应体</p>')->withCookie('uid',10,10);

        //读取
       // GET /HTTP/1.1                     行
       // Host: localhost                   头
       // Cookie: name=haiyan;phone=chuizi  体
        //  ....

        $name = \Cookie::get('uid');
        dd($name);
    }


    /**
     *写入闪存
     */
    public function falsh(){
       // \Session::flash('info','恭喜您添加成功');
        return redirect('/get-falsh')->with('info','添加成功');

    }

    /**
     * 读取闪存
     */
    public function getFlash(){
       echo  \Session::get('info');
    }

    public function user(){
        return view('user');
    }
    public function insert(){
        //表单验证，检测用户名  密码
        if (empty($_POST['username']) || strlen($_POST['username']) < 6  || strlen($_POST['username'])>20){

            \Session::flash('error','用户名格式不正确');
           return back()->withInput();
        }
    }


    public  function response(){
        //普通字符串
        //return 'i love you???';
        //return '<span>这就是爱</span>';

        //返回json
        //return response()->json(['name'=>'xiaoheigh','age'=>32]);


        //返回模版
        return view('view');

        //下载
//        return response()->download('冯提莫&袁成杰-天下有情人.flac');


    }

    //视图演示
    public function views(){
        return view('user.add',[
            'title'=>'第一次接触视图',
            'content'=>'山东发大水了，香菜涨到39元一斤',
            'username'=>'admin',
            'pages'=>'<a href="#">1</a><a href="#">2</a>'
        ]);

    }


    //模版继承
    public function pages1(){
        return view('page1');
    }

    public function pages2(){
        return view('page2');
    }

    //流程控制
    public function control(){
        return view('control',[
            'isVip'=>true,
            'classmates'=>[
                '老李',
                '老王',
                '老邢'
            ]
        ]);
    }








































}
