<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Music-心情</title>
	<link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
	<link rel="stylesheet" href="/myApp/Public/Css/mood.css" />
	<script type="text/javascript" src='/myApp/Public/Js/jquery-2.1.4.js'></script>
	<script type="text/javascript" src='/myApp/Public/Js/mood.js'></script>
	<script type="text/javascript">
		var moodUrl="<?php echo U('checkmood','','');?>";
	</script>
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
		<li class="nav_09"><a href="<?php echo U('Index/mood');?>" >Duomi-音乐心情</a></li>
		<li class="nav_gap"></li>
		<li class="nav_04" style="position: relative;"><a href="#">Duomi-彩铃声</a><img class="nav-new" src="/myApp/Public/Images/nav_new.jpg"></li>
		<li class="nav_gap"></li>
		<li class="nav_06"><a href="<?php echo U('Index/delia');?>">Duomi-日志</a></li>
		<li class="nav_gap"></li>
		<li class="nav_08"><a href="#">Duomi-歌单</a></li>
	</ul>
</nav>
	<div id='top'>
		<span id='send'></span>
		<span>点击书写心情吧...</span>
	</div>
	<div id='main'>
		<?php if(is_array($mood)): foreach($mood as $key=>$v): ?><dl class='paper a<?php echo mt_rand(1,5);?>'>
			<dt>
				<span class='username'><?php echo ($v["username"]); ?></span>
				<span class='num'>No.<?php echo ($v["id"]); ?></span>
			</dt>
			<dd class='content'><?php echo (replace_phiz($v["content"])); ?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo (date('y-m-d H:i',$v["time"])); ?></span>
				<a href="" class='close'></a>
			</dd>
		</dl><?php endforeach; endif; ?>
	</div>

	<div id='send-form'>
		<p class='title'><span>写下你的心情...</span><a href="" id='close'></a></p>
		<form action="<?php echo U('Index/checkmood');?>" name='wish'>
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username'/>
			</p>
			<p>
				<label for="content">心情：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
				<div id='phiz'>
					<img src="/myApp/Public/Images/mood/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/myApp/Public/Images/mood/phiz/baobao.gif" alt="抱抱" />
					<img src="/myApp/Public/Images/mood/phiz/haixiu.gif" alt="害羞" />
					<img src="/myApp/Public/Images/mood/phiz/ku.gif" alt="酷" />
					<img src="/myApp/Public/Images/mood/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/myApp/Public/Images/mood/phiz/taikaixin.gif" alt="太开心" />
					<img src="/myApp/Public/Images/mood/phiz/touxiao.gif" alt="偷笑" />
					<img src="/myApp/Public/Images/mood/phiz/qian.gif" alt="钱" />
					<img src="/myApp/Public/Images/mood/phiz/huaxin.gif" alt="花心" />
					<img src="/myApp/Public/Images/mood/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<span id='send-btn'></span>
		</form>
	</div>
<footer>
        <div class="foot">
            <p>版权所有 翻版必究</p>
            <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
        </div>
    </footer>	
</body>
</html>