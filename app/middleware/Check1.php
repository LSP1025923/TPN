<?php
declare (strict_types = 1);

namespace app\middleware;

use think\Response;
use think\facade\Session;
class Check1
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        //
        if ((Session::get("sb")==Session::get("token")&&!empty(Session::get("sb"))&&!empty(Session::get("token")))){

            return $next($request);
        }
        else{
            echo Session::get("sb");
            echo "<br>";

            echo Session("token");
            return response("虽然我是新手,但是懂的一点token验证什么的");

        }
    }
}
