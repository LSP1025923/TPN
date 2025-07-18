<?php

namespace app\index\controller;

use app\BaseController;
use app\index\model\Demo;
use app\model\Sb;

class Testget extends BaseController
{
//    public function index(){
////        return json(Sb::select());
//////        return json(Demo::select());
////    }
//////    public function add()
//////    {
//////        $b = new Demo;
//////////        $b->name="小强";
//////////        $b->age=16;
//////////        $b->gender="男";
//////////        $b->id=8;
//////////        $b->save();
////////        $b->saveall([["name"=>"赵六","age"=>19,"gender"=>"男"],["name"=>"钱7","age"=>22,"gender"=>"男","details"=>"我很有钱"]]);
//////        //Demo::create(["name"=>"李白","age"=>38,"gender"=>"男"]);
//////        //Demo::destory(12);
////////        $s=$b->where("id",11)->find();
////////        $s->delete();
////////           Demo::destroy(function ($query){
////////               $query->where("id",10);
////////           });
//////        $a=$b->where("name","小强")->find();
//////        $a->age=Db::raw("age+2");
//////        $a->details="我是小强，我就是超人强";
//////    }
////    public function select(){
//////        echo Demo::select([1,2,3]);
//////        echo Demo::find(1);
//////        json(Demo::where("id",">","4")->select());
//////        $user= Demo::limit(3)->order("id","desc")->select();
//////        return json($user);
//////          echo Demo::count();
//////         return Demo::select();
////         //return json(Demo::select());
//////        $demo=Demo::find(1);
//////        echo $demo->getData("status");
//////        $user =Demo::select()->withAttr("age",function($value){
//////            return $value+100;
//////        });
//////        return json($user);
//////         $b=Demo::withSearch(["name"],["name"=>"王"])->select();
//////         $b=Demo::withSearch(["time"],["time"=>["2025-05-26 09:47:23","2025-05-26 09:47:31"]])->select();
//////         return json($b);
////            return json(Demo::select());
////    }
////    public function add(){
//////        return Demo::create([
//////            "name"  =>  "酒剑仙",
//////            "age"   =>  58,
//////            "gender"=>  "男",
//////            "details"   =>  "我是隐藏主角！"
//////        ]);
////
////    }
////    public function del(){
////        //软删除
//////        Demo::destroy(8);
//////        $user = Demo::find(14);
//////        $user->delete();
////
////
////    }
////    public function re(){
////        $demo=Demo::onlyTrashed()->find();
////        $demo->restore();
////    }
////
////}
}
