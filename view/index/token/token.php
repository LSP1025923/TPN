<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>刻意的令牌获取器,你想要获取什么成员的令牌？</p>
<form action="/index.php/index/token/token" method="post">
    <input type="text" name="sb" value="">
    <input type="submit" value="获取">
</form>
<p><?php echo $token?></p>
</body>
</html>