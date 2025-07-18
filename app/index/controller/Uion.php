<?php

namespace app\index\controller;

use app\BaseController;
use app\index\model\Demo;
use app\index\model\Profile;

class Uion extends BaseController
{
    public function index()
    {
//            $user=Demo::find(7);
//            //return json($user->profile->hobby);
//          //echo $user->profile->save(["hobby"=>"不喜欢吃青椒"]);
//        echo $user->profile()->save(["hobby"=>"不喜欢吃青椒"]);
//            $demo=Demo::hasWhere("profile",["id"=>6])->find();
//            $demo=Demo::hasWhere("profile",function($query){
//                $query->where("id",5);
//            })->find();
//            return json($demo);
//            $demo=Demo::find(7);
//            return json($demo->profile);
//            return json($demo->profile()->where("id",">",5)->select());
//            $demo = Demo::has("profile",">=",2)->select();
//            return json($demo);
//            $demo=Demo::find(1);
//            return json($demo->role);
//            $demo=Demo::find(1);
//            $demo->role()->save(["id"=>6,"type"=>"测试管理专员"]);
//             $demo=Demo::find(4);
//             $demo->role()->save(6);
            $demo=Demo::find(4);
//            $demo->role()->attach(2, ["details" => "这个是赋予管理员权限"]);
            $demo->role()->detach(6);
    }
//        public function son(){
//            $profile = Profile::find(5);
//            return json($profile->demo);
//        }
//        public function add(){
//            $demo=Demo::find(8);
//            $demo->profile()->save(["hobby"=>"测试习惯","visible"=>1]);
//
//        }
//        public function del(){
//            $user=Demo::with("profile")->find(8);
//            $user->together(["profile"])->delete();
//        }
//        public function count(){
//            $list=Demo::withCount(["profile"=>"pc"])->select([8,9,7]);
//            foreach($list as $demo){
//                echo $demo->pc."<br>";
//            }
//        }




}