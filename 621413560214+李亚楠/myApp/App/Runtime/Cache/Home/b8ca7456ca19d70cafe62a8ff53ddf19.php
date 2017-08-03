<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>乐友页面</title>
		<link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
		<link rel="stylesheet" href="/myApp/Public/Css/friend.css" />
		<link rel="stylesheet" href="/myApp/Public/Css/figure.css" />
		<script type="text/javascript" src="/myApp/Public/Js/jquery-2.1.4.js" ></script>
		<script type="text/javascript" src="/myApp/Public/Js/friend.js"></script>
	</head>
	<body>
	<header>
		<nav class="loading" id="head_nav">
			<div class="logo_p"><a href="#"><img src="/myApp/Public/Images/logo.png"/></a></div>
			<div class="logo_t">
				<span class="register"><a href="<?php echo U('Home/Register/register');?>">注册 </a>|</span>
				<span class="log"><a href="<?php echo ($src); ?>"><?php echo ($checklogin); ?> </a>|</span>
				<span class="log"><a href="<?php echo U('/Admin','','');?>">管理员登录</a>|</span>
				<span id="name"><?php echo ($user); ?></span>
			</div>
			<span id="face" ><img src="<?php echo ($imgUrl); ?>" width="40px"height="40px"border="black"/></span>
		</nav>
	</header>
	<nav class="nav_div">
		<ul class="index_nav">
			<li class="nav_01"><a href="/myApp/index.php">首页</a></li>
			<li class="nav_gap"></li>
			<li class="nav_02"><a href="<?php echo U('Index/feng');?>">Duomi-中国风</a></li>
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
<article>
	<div class="art_friend">
		<div class="art_t"><span>乐友</span>
		</div>

		<table border="1px" bordercolor="#ccc" cellpadding="0" cellspacing="0">
			<tr>
				<td class="tab_td"><span>头像</span></td>
				<td class="tab_td"><span>喜欢的歌</span></td>
				<td class="tab_td"><span>心情</span></td>
			</tr>
			<?php if(is_array($friend)): foreach($friend as $key=>$v): ?><tr>
				<td><figure class="effect"><img src="<?php echo ($v["face"]); ?>"/> <figcaption>
                        <h2>
							<?php echo (check_sex($v["sex"])); ?>
                            	<br>
                  			 <span>
                               <?php echo ($v["username"]); ?>
                            </span>
                        </h2>
                    </figcaption></figure></td>
				<td>燕归巢</td>
				<td>这首歌很好听，我很喜欢！！！</td>
			</tr><?php endforeach; endif; ?>
			<tr>
			<td colspan='5' align="center"><?php echo ($page); ?></td>
			</tr>
		</table>
	</div>
</article>		
	<footer>
        <div class="foot">
            <p>版权所有 翻版必究</p>
            <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
        </div>
    </footer>
	</body>
</html>