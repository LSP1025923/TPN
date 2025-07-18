<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\Filesystem;
use think\facade\Validate;

class File extends BaseController
{
    public function up(){
        return view();

    }
    public function save(){
////        $file=$this->request->file("image");
//////        halt($file);
////        Filesystem::putfile("upload",$file); //上传到本地服务器里面
//        $files=$this->request->file("image");
//        foreach($files as file){
//            $saveNames[]=Filesystem::putFile("upload",$file);
//        }

//        $file=$this->request->file("image");
//        $val=Validate::rule(["image"=>"fileExt:png"]);
//        $result=$val->check(["image"=>$file]);
//        if($result){
//            Filesystem::putFile("upload",$file);
//        }
//        else{
//            dump($val->getError());
//        }


    }
}