<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\Db;

class User extends BaseController

{
    public function index(){
        return $this->request->action();
        return $this->app->getBasePath();
}
    public function get(){
        $a = Db::table("demo")->select();
        return json($a);
    }
        //$user=Db::table("user")->select();
//        $user=Db::table("user")->where("id",4)->find()  ;
//        $user = Db::table("user")->where("id",4)->findOrEmpty(); // 这段的意思就是查找user表然后id为4的字段，如果没找到就返回空列表
//        $user = Db::table("user")->where("id",4)->findOrFail(); // 这段的意思就是查找user表然后id为4的字段，如果没找到就报错
//        $user = Db::table("user")->where("age",14)->select();   // 这个跟刚刚有点不同，这个是专门查找多条数据的，如果没找到，就返回空列表
//        $user = Db::table("")->
//        halt($user);
//        return json($user);
//    }
//    public function get2(){
//        $user = Db::name("user")->select();
////        $user = Db::name("user")->where("age",14)->value("name");
//        $user = Db::name("user")->where("age",14)->column("name","id");
//        //批处理
//        Db::name("user")->chunk(2,function($users){
//            foreach($users as $user) {
//                dump($user);
//
//            }
//            echo 2;
//        });
//        //游标查询
//        //halt() 这个函数类似于调试
//        $users = Db::name("user")->cursor();
//        foreach ($users as $user) {
//            dump($user);
//        }
//
////        return json($user);
//        return  Db::getLastSql();
//
//    }


}