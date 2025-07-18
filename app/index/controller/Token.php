<?php

namespace app\index\controller;

use app\BaseController;
use think\facade\Session;

class Token extends BaseController
{
    public function token()
    {
        $message = "请输入成员名称获取令牌";
        if (input("post.sb") == "admin") {
            $sb = $this->request->buildToken("token", "sha1");
            Session::set("sb", $sb);
            $message = "获取成功: " . $sb;
        } elseif (input("post.sb") !== null) {
            $message = "还不知道嘛，都明摆着了";
        }

        return "<!DOCTYPE html>\n" .
            "<html lang=\"en\">\n" .
            "<head>\n" .
            "    <meta charset=\"UTF-8\">\n" .
            "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n" .
            "    <title>令牌获取</title>\n" .
            "    <style>\n" .
            "        body {\n" .
            "            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);\n" .
            "            color: #00fff7;\n" .
            "            font-family: 'Courier New', Courier, monospace;\n" .
            "            text-align: center;\n" .
            "            padding: 50px;\n" .
            "        }\n" .
            "        input[type=text] {\n" .
            "            padding: 10px;\n" .
            "            font-size: 1rem;\n" .
            "            border: 2px solid #00fff7;\n" .
            "            border-radius: 5px;\n" .
            "            background: transparent;\n" .
            "            color: #00fff7;\n" .
            "            margin-right: 10px;\n" .
            "            width: 300px;\n" .
            "        }\n" .
            "        input[type=submit] {\n" .
            "            padding: 10px 20px;\n" .
            "            font-size: 1rem;\n" .
            "            color: #24243e;\n" .
            "            background: #00fff7;\n" .
            "            border: none;\n" .
            "            border-radius: 5px;\n" .
            "            cursor: pointer;\n" .
            "            transition: background 0.3s;\n" .
            "        }\n" .
            "        input[type=submit]:hover {\n" .
            "            background: #00cfcf;\n" .
            "        }\n" .
            "        p.message {\n" .
            "            margin-top: 20px;\n" .
            "            font-size: 1.2rem;\n" .
            "            text-shadow: 0 0 5px #00fff7;\n" .
            "        }\n" .
            "    </style>\n" .
            "</head>\n" .
            "<body>\n" .
            "    <h1>令牌获取器</h1>\n" .
            "    <form method=\"post\">\n" .
            "        <input type=\"text\" name=\"sb\" placeholder=\"输入成员名称\" required>\n" .
            "        <input type=\"submit\" value=\"获取\">\n" .
            "    </form>\n" .
            "    <p class=\"message\">" . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "</p>\n" .
            "</body>\n" .
            "</html>";
    }
}
