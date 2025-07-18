<?php

namespace app\index\model;

use think\Model;

class Demo1 extends Model
{
//    protected $schema = [
//        "id" => "int",
//        "name" => "string",
//
//    ];
//    protected $disuse=["age","details"];
//    protected $readonly=["age","details"];
        //获取器
//    public function getStatusAttr($value,$data)
//    {
////        if ($data["id"] ==1){
////            halt($data);
////        }
//
//        $status = [-1 => "删除", 0 => "冻结", 1 => "正常", 2 => "待审核"];
//        return $status[$value];
//
//    }
//    //修改器
//        public function setAgeAttr($value)
//        {
//            return $value+100;
//        }
    //搜素器

//    public function searchNameAttr($query,$value,$data){
//            $query->where("name","like","%".$value."%");
//    }
//    public function searchTimeAttr($query,$value,$data){
//        $query->whereBetweenTime("time",$value[0],$value[1]);
//        if (isset($data)){
//            $query->order("id","desc");
//        }
//    }
//    use SoftDelete;
//    public static function onAfterRead($user){
//        echo "你是不是查询到了".$user->id;
//    }
//
//
//
    public function abc(){
        return $this->hasOne(Profile::class);
    }
}