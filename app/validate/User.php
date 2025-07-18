<?php
declare (strict_types = 1);

namespace app\validate;

use think\Validate;

class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名' =>  ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = ["name" =>"require|max:20|checkName:吴海洋|token","email"=>"email"];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名' =>  '错误信息'
     *
     * @var array
     */
    protected $message = ["name.require"=>"姓名必须写","email.email"=>"电子邮件认真的吗？"];
    protected function checkName($value,$rule){
        if ($value = $rule){
            return "你敢对吴大人不敬嘛";
        }
        else{
            return true;
        }
    }
    // 验证场景
    protected $scene = [
        "insert"    =>  ["name", "email"],      // 新增验证name和email
        "edit"      =>  ["email"],// 修改验证email
    ];
    protected function sceneInsert(){
        return "";
    }
}
