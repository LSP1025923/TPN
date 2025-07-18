<?php

namespace app\index\model;

use think\Model;

class Profile extends Model
{
    public function demo(){
        return $this->belongsTo(Demo::class,"use_id");
    }


}