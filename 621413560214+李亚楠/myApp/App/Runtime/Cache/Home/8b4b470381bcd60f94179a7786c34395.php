<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Duomi-音乐日志</title>
		<link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
		<link rel="stylesheet" href="/myApp/Public/Css/delia.css" />
		<script type="text/javascript" src="/myApp/Public/Js/jquery-2.1.4.js" ></script>
		<script type="text/javascript" src="/myApp/Public/Js/search.js" ></script>
		<script type="text/javascript" src="/myApp/Public/Js/delia.js" ></script>
		<script type="text/javascript">
		var deliaUrl="<?php echo U('search','','');?>";
		</script>
	</head>
	<body>
	<header>
		<nav class="loading" id="head_nav">
			<div class="logo_p"><a href="/myApp/index.php"><img src="/myApp/Public/Images/logo.png"/></a></div>
			<div class="logo_t">
				<span class="register"><a href="<?php echo U('Home/Register/register');?>">注册</a>|</span>
				<span class="log"><a href="<?php echo ($src); ?>"><?php echo ($checklogin); ?></a>|</span>
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
			<aside class="delia_title"><h2>Music Daily Record</h2></aside>
			<section id="content_bu">
				<aside class="sousuo">
				<span class="bu_s">搜索</span>
						<aside class="sou_blank">
						<form method="post" action="<?php echo U('Index/search');?>">
						<input type="search" placeholder="Search"name="search" /><img src="/myApp/Public/Images/magnifier.png" id="search"/>
						</form>
						</aside>
				</aside>
				<aside class="sou_img">
					<img src="/myApp/Public/Images/sou_img.jpg" width="300px" height="300px"/>
				</aside>
				<aside class="new_delia">
					<span class="bu_s">最新发布</span>
					<ul>
						<li><img src="/myApp/Public/Images/en1.jpg" /><a href="#">我们就是这样紧紧地捆在一起，生于温情，死于温情</a>
							<div class="time_p">
								<span class="time">2016-04-06</span>
								<span><a>0条评论</a></span>
							</div>
						</li>
						<li><img src="/myApp/Public/Images/en2.jpg" /><a href="#">他们找不到你，如同你找不到他们</a>
							<div class="time_p">
								<span class="time">2016-04-06</span>
								<span><a>0条评论</a></span>
							</div>
						</li>
					</ul>
				</aside>
			</section>
			<section id="content">
				<?php if(is_array($delia)): foreach($delia as $key=>$v): ?><div class="title"><a href="<?php echo U('Index/delialist',array(id=>$v[id]));?>"><p><?php echo ($v["title"]); ?></p></a></div>
				<hr size="4" color="#EF2F88"/>
				<div class="con_img"><img src="<?php echo ($v["pic"]); ?>" width="280px" height="280px"/></div><?php endforeach; endif; ?>

				<div id="pag"><?php echo ($page); ?></div>
			</section>

		</article>
			
	 <footer>
        <div class="foot">
            <p>版权所有 翻版必究</p>
            <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
        </div>
    </footer>	
	</body>
</html>