<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册</title>
    <link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
    <link rel="stylesheet" href="/myApp/Public/Css/register.css" />
    <script type="text/javascript" src="/myApp/Public/Js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/face.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/register.js"></script>
    <script type="text/javascript">
        var verifyURL="<?php echo U('Public/verify','','');?>"
    </script>
</head>
<body>
<header class="header_div">
    <nav class="loading" id="head_nav">
        <div class="logo_p"><a href="/myApp/index.php"><img src="/myApp/Public/Images/logo.png"/></a></div>
        <div class="logo_t">
            <span class="register"><a href="<?php echo U('Register/register');?>">注册</a>|</span>
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
            <li class="nav_02"><a href="#">Duomi-中国风</a></li>
            <li class="nav_gap"></li>
            <li class="nav_03"><a href="#">Duomi-好友</a></li>
            <li class="nav_gap"></li>
            <li class="nav_09"><a href="#" target='_blank'>Duomi-音乐心情</a></li>
            <li class="nav_gap"></li>
            <li class="nav_04" style="position: relative;"><a href="http://ling.duomi.com/index.html" target='_blank'>Duomi-彩铃声</a><img class="nav-new" src="/myApp/Public/Images/nav_new.jpg" ></li>
            <li class="nav_gap"></li>
            <li class="nav_06"><a href="#" target='_blank'>Duomi-日志</a></li>
            <li class="nav_gap"></li>
            <li class="nav_08"><a href="#">Duomi-歌单</a></li>
        </ul>
    </nav>
</aside>
<section class="sec_register">

        <form action="/myApp/index.php/Register/checkregister" method="post" id="reg">
            <ul>
                <li><span>　　昵称：</span> <input type="text" name="username" placeholder="2-10个汉字或字母" class="text"/></li>
                <li><span>　　密码：</span> <input type="password" name="password" placeholder="6-12位数字或字母" class="text"/></li>
                <li><span>确认密码：</span> <input type="password" name="check" class="text"/></li>
                <li><span>　　性别：</span> <input type="radio" name="sex" value="1"class="sex" checked/>男
                                            <input type="radio" name="sex" value="0"class="sex"/>女
                </li>
                <li style="font-family: '微软雅黑'; font-size:20px; color:#74b608; margin-top:10px;">点击头像，选择您喜欢的头像吧...</li>
                <li><input type="hidden" name="face"  value="/myApp/Public/Images/face/11.jpg"/><img alt="头像选择" src="/myApp/Public/Images/face/11.jpg" onclick="ShowDiv()"></li>
                <li><span>　验证码：</span><input type="text" name="code" class="code"/><img src="<?php echo U('Public/verify');?>" id="verify"/><a href="javascript:void(change_code(this));">看不清？换一张</a></li>
                <li><input type="submit" class="submit" name="submit" value="注册" /></li>
            </ul>
        </form>
            <!--<div id="fade" class="overlay"></div>-->
        <div id="MyDiv" class="content">
        <span>
            <span onclick="CloseDiv()"><img src="/myApp/Public/Images/small_close.png"/></span>
        </span>
            <dl>
                <dt>请选择头像</dt>
            <?php if(is_array($num)): $i = 0; $__LIST__ = $num;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd class="checkimg"><img src="/myApp/Public/Images/face/<?php echo ($v); ?>.jpg"/></dd><?php endforeach; endif; else: echo "" ;endif; ?>
            </dl>
        </div>
</section>
<footer class="index_footer">
    <div class="foot">
        <p>版权所有 翻版必究</p>
        <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
    </div>
</footer>
</body>
</html>