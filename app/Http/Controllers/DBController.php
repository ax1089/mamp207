<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use think\Exception;


class DBController extends Controller
{
    //
    /**
     * 查询
     */

    public function select(){
        $article=DB::select('select * from jd_blog_article limit 10');
        dd($article);
    }

    public function trans(){
////        DB::beginTransaction();
        DB::transaction(function (){
            $res1=DB::update ('update users set account=account -100  where id =1');
            $res2=DB::update ('update users set account=account +100  where id =2');
            if ($res1 && $res2){
                DB::commit();
            }else{
                DB::rollBack();
            }





//            try{
//                $res2=DB::update ('updatde users set account=account +100  where id =2');
//            }catch (\Exception $e){
//                //echo $e->getMessage();
//            }
//            echo '333';
        });

        return view('page1');

//        if ($res1 && $res2){
//            DB::commit();
//        }else{
//            DB::rollBack();
//        }

    }


    public  function join(){
        $res = DB::table('goods')
            ->join('cates','cate_id','=','cates.id')
            ->select('goods.*','cates.name')
            ->skip(0)
            ->take(10)
            ->get();
        dd($res);
    }













































}
