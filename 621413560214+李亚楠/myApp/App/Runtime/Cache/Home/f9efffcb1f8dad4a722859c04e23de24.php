<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
    <link rel="stylesheet" href="/myApp/Public/Css/login.css"/>
    <script type="text/javascript" src="/myApp/Public/Js/jquery-2.1.4.js" ></script>
    <script type="text/javascript" src="/myApp/Public/Js/login.js"></script>
</head>
<body>
<header class="header_div">
    <nav class="loading" id="head_nav">
        <div class="logo_p"><a href="/myApp/index.php"><img src="/myApp/Public/Images/logo.png"/></a></div>
        <div class="logo_t">
            <span class="register"><a href="/myApp/index.php/Register/register">注册 </a>|</span>
            <span class="log"><a href="/myApp/index.php/Login/login">登录 </a>|</span>
            <span class="log"><a href="<?php echo U('/Admin','','');?>">管理员登录</a>|</span>
        </div>
    </nav>
</header>
<aside class="aside">
    <nav class="nav_div">
        <ul class="index_nav">
            <li class="nav_01"><a href="/myApp/index.php">首页</a></li>
            <li class="nav_gap"></li>
            <li class="nav_02"><a href="<?php echo U('Index/feng');?>" target="_blank">Duomi-中国风</a></li>
            <li class="nav_gap"></li>
            <li class="nav_03"><a href="<?php echo U('Index/friend');?>">Duomi-好友</a></li>
            <li class="nav_gap"></li>
            <li class="nav_09"><a href="<?php echo U('Index/mood');?>">Duomi-音乐心情</a></li>
            <li class="nav_gap"></li>
            <li class="nav_04" style="position: relative;"><a href="http://ling.duomi.com/index.html">Duomi-彩铃声</a><img class="nav-new" src="/myApp/Public/Images/nav_new.jpg"></li>
            <li class="nav_gap"></li>
            <li class="nav_06"><a href="<?php echo U('Index/delia');?>">Duomi-日志</a></li>
            <li class="nav_gap"></li>
            <li class="nav_08"><a href="#">Duomi-歌单</a></li>
        </ul>
    </nav>
</aside>

    <section class="box_login">
        <form action="/myApp/index.php/Login/checklogin" method="post">
                <ul>
                <li><span>　　昵称：</span> <input type="text" name="username" placeholder="2-10个汉字或字母"/></li>
                <li><span>　　密码：</span> <input type="password" name="password" placeholder="6-12位数字或字母"/></li>
                <li><input type="submit" name="submit" class="submit" value="登录"/></li>
                </ul>
        </form>




    </section>




<footer class="index_footer">
    <div class="foot">
        <p>版权所有 翻版必究</p>
        <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
    </div>
</footer>
</body>
</html>