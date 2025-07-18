<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

//Route::get('think', function () {
//    return 'hello,ThinkPHP8!';
//});

//Route::get('hello/:name', 'index/hello');
////Route::rule("details/:id","Index/details");
//Route::rule("details-:id-[:sb]","Index/details")->pattern(['id' => '\d+']);
//Route::rule("details-<id>-<sb>","Index/details")->pattern(['id' => '\d+'])->ext("html");
//Route::rule("details-<id>-<sb>","Index/details")->denyext("py|sb|html|oo");
//Route::rule(
//    'details-<id>-<sb>',     // 路由规则
//    'Index/details'          // 控制器方法
//)
//    ->domain('127.0.0.2');
//Route::rule("sb",function (){
//    return "你成功调用闭包函数";
//});

//Route::rule("sb",function (){return "你成功调用闭包函数";});
//Route::rule("/","Index/index");
////Route::miss(function(){
////    return "你的路由访问有问题";
////});
//
////Route::miss("Error/miss");
//
//Route::group("index",function(){
//    Route::rule("hello/[:name]","hello");
//    Route::rule("test/:info","test");
//})->prefix("Index/");
//Route::rule("test/:info","Index/test");
//Route::rest("create", ["GET", "/add", "add"]);
//Route::resource("blog","Blog");
//Route::rule("/t/s","Tk/save")->token();
//Route::rule("c/y","Cap/verify");
//
Route::rule("sb/:a/:b","Admin/hello");  //我想给这块设置路由方便你们渗透的，不知道为什么我这个路由是无效的