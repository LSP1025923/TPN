<?php
declare (strict_types = 1);

namespace app\middleware;

use think\Response;

class Check
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

        $pattern = '/\b(eval|exec|system|shell_exec|popen|proc_open|assert|base64_decode|file_get_contents|phpinfo)\b/i';
        if (preg_match($pattern, request()->url())) {
                return Response("差一点差一点");

        }

        return $next($request);
    }
}
