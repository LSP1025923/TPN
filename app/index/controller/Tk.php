<?php

namespace app\index\controller;

use app\BaseController;
use app\controller\FileSystem;
use think\facade\Validate;

class  Tk extends BaseController{
//    public function index(){
//        return view("index",["token"=>$this->request->buildToken("__token__","sha1")]);
//    }
//    public function save(){
////        $check=$this->request->checkToken("__token__");
////        if($check === false){
////            echo "你的令牌是无效的";
////            throw new ValidateException("令牌无效");
//
////        }
//        $file=$this->request->file("image");
//        $validate=Validate::rule(["image" =>"file|fileExt:png,gif"]);
//        $result=$validate->check(["image"=>$file]);
//        if($result){
//            FileSystem::putfile("upload",$file);
//        }
//        else{
//            dump($validate->getError());
//        }
//
//    }


}
