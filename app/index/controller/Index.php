<?php

namespace app\index\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return "<!DOCTYPE html>\n" .
            "<html lang=\"en\">\n" .
            "<head>\n" .
            "    <meta charset=\"UTF-8\">\n" .
            "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n" .
            "    <title>Thinkphp5</title>\n" .
            "    <style>\n" .
            "        body {\n" .
            "            margin: 0;\n" .
            "            height: 100vh;\n" .
            "            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);\n" .
            "            font-family: 'Orbitron', sans-serif;\n" .
            "            color: #00fff7;\n" .
            "            display: flex;\n" .
            "            justify-content: center;\n" .
            "            align-items: center;\n" .
            "            flex-direction: column;\n" .
            "            text-shadow: 0 0 5px #00fff7, 0 0 10px #00fff7, 0 0 20px #00fff7;\n" .
            "        }\n" .
            "        h1 {\n" .
            "            font-size: 4rem;\n" .
            "            margin-bottom: 0.5em;\n" .
            "            animation: flicker 3s infinite;\n" .
            "        }\n" .
            "        @keyframes flicker {\n" .
            "            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% { opacity: 1; }\n" .
            "            20%, 22%, 24%, 55% { opacity: 0.4; }\n" .
            "        }\n" .
            "    </style>\n" .
            "</head>\n" .
            "<body>\n" .
            "    <h1>最终决战，你能ak web吗大手子</h1>\n" .
            "</body>\n" .
            "</html>";
    }
}
