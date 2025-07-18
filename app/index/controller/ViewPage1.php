<?php

namespace app\index\controller;
use think\facade\Cache;
use think\facade\Cookie;
use think\facade\Session;
use think\facade\Validate;

//use app\validate;

class ViewPage1
{
//    public function create(){
//        return view();
//}
//    public function save(){
//        echo request()->method();
//        echo request()->isPost();
//        echo input("post.name");
//
//    }
//    public function view(){
////        return response(123,201);
////        return response("123")->code(201);
//        return redirect('/',303
//        );
//
//    }
//        public function sess(){
//
//            Session::set("xf","徐峰");
//            Session::set("user","徐峰");
////            session(null);
////            dump(Session::all());
//           return  json(request()->session());
//
//        }
//        public function setC(){
//            Cookie::set("user","徐爷",3600);
//            Cookie::get("user");
//
//
//        }
//        public function getC(){
//            return Cookie::get("user");
//
//        }
//        public function cache(){
////    Cache::set("user","徐爷",3600);
////    echo Cache::get("user");
////    Cache::clear();
//////
////            Cache::set("num",1);
////            Cache::inc("num");
////            echo Cache::get("num");
////            Cache::dec("num");
////            echo Cache::get("num");
//            Cache::set("arr",[1,2,3]);
//            Cache::push("arr",4);
//            dump(Cache::get("arr"));
//}
//    public function vail(){
////        try{
////            validate(User::class)->scene("edit")->batch(true)->check(["name"=>"吴海洋","email"=>"123456"]);
////        }
////
////        catch(ValidateException $e){
////                dump($e->getError());
////        }
//        $vail=Validate::rule(["name" =>"require|max:20","email"=>"email"]);
//        $result=$vail->check(["name"=>"","email"=>"徐峰"]);
//        if (!$result){
//            dump($vail->getError());
//        }
//        $vail=Validate::isNumber(10);
//        echo $vail;
//    }


}