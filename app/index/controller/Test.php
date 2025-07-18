<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\Db;

class Test extends BaseController
{
//    public function index(){
//        //return $this->app->getBasePath(); //返回路径
//        return $this->request->action(); //返回当前的方法名
//    }
//    public function cj($cj){
//        return $cj;
//    }
//    public function get(){
////        $a =Db::table("demo")->select();
////        $b=Db::table("demo")->where("id",1)->find();
//////        $b=Db::table("demo")->where("id",13)->findOrEmpty();
//////        $b=Db::table("demo")->where("id",13)->findOrFail();
////        //return  Db::getLastSql();
////        halt($b);
////        return json($b);
//    }
//    public function get2(){
////        $a=Db::name("demo")->select();
////        $a=Db::name("demo")->where("id",3)->value("name");//不仅过滤还只查name的列,value只能指定一个列
//        $a=Db::name("demo")->where("age",14)->column("name,age","id");//查看
//         //批处理
//         DB::name("demo")->chunk(2,function($a){
//             foreach($a as $a1){
//                 dump($a1);
//             }
//         });
//        //return json($a);
//
//    }
//    public function add(){
////       $data=["name" =>"徐峰",
////            "age" =>28,
////            "gender" => "男",
////            "details" => "我是全世界最大帅"
////        ];
//        //Db::name("demo")->insert($data);
////        $data=["name" =>"周建",
////            "age" =>18,
////            "gender" => "男",
////            "detas" => "yes，googo！！"
////        ];
////        $data=[
////            "id" => 7,
////            "name" =>"吴海洋",
////            "age" =>17,
////            "gender" => "男",
////            "details" => "yes，googo！！"
////        ];
////        Db::name("demo")->replace()->insert($data);
//    }
//    public function get3(){
//       //$b=Db::name("demo")->where("name" ,"like","王%")->select();
////        $b=Db::name("demo")->whereLike("name" ,"王%")->select();
////        $b=Db::query("select * from tp_demo");
////        return json($b);
//          //$b=Db::name("demo")->where([["age",">","10"],["gender","=","男"]])->select();
//        $b=Db::name("demo")->where(["age" =>14 ,"gender" => "男"])->select();
//          return json($b);
//
//    }



}