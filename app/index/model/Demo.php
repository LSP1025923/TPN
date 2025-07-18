<?php

namespace app\index\model;

use think\Model;

class Demo extends Model
{
    // Demo 模型
    public function profile()
    {
//        return $this->hasOne(Profile::class,"use_id");
        return $this->hasMany(Profile::class,"use_id");
    }
    public function role(){
        return $this->belongsToMany(Role::class,Access::class,"role_id","user_id");
    }

}