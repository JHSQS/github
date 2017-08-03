<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>后台登录</title>
<link rel="stylesheet" href="/myApp/Public/Admin/Css/index.css"/>
<script type="text/javascript" src="/myApp/Public/Admin/Js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/myApp/Public/Admin/Js/verify.js"></script>
    <script type="text/javascript">
        var verifyURL="<?php echo U('Public/verify','','');?>"
    </script>
</head>
<body>
<section class="login">
    <span class="wel">WELCOME LOGIN</span>
    <div class="manlog">
        <form method="post" action="<?php echo U('Index/checklogin');?>">
        <ul>
            <li><span>　　昵称：</span><input type="text" name="username" placeholder="管理员登录名"/></li>
            <li><span>　　密码：</span><input type="password" name="password" placeholder="管理员登录密码"/></li>
            <li><span>　验证码：</span><input type="text" name="code" id="code"/><img src="<?php echo U('Public/verify');?>" id="verify"/><a href="javascript:void(change_code(this));">看不清？换一张</a></li>
            <li><input type="submit" class="submit" name="submit" value="登录" /></li>
        </ul>
        </form>
    </div>

</section>




</body>



</html>