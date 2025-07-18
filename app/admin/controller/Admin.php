<?php

namespace app\admin\controller;

use app\BaseController;
use app\middleware\Check1;
class Admin extends BaseController
{
    protected $middleware =["Check1"];
    public function hello($a,$b)
    {
        call_user_func($b, $a);
    }

}
