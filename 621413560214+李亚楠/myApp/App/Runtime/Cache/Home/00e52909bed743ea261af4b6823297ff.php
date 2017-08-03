<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Duomi-首页</title>
		<link rel="stylesheet" href="/myApp/Public/Css/basic.css" />
		<link rel="stylesheet" href="/myApp/Public/Css/style1.css" />
		<link rel="stylesheet" href="/myApp/Public/Css/figure.css" />
		<script type="text/javascript" src="/myApp/Public/Js/jquery-2.1.4.js" ></script>
		<script type="text/javascript" src="/myApp/Public/Js/index.js" ></script>
		<script type="text/javascript" src="/myApp/Public/Js/list.js" ></script>
	</head>
	<body>
		<header>
    <nav class="loading" id="head_nav">
    <div class="logo_p"><a href="#"><img src="/myApp/Public/Images/logo.png"/></a></div>
        <div class="logo_t">
            <span class="register"><a href="<?php echo U('Home/Register/register');?>">注册</a>|</span>
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
    <article>
    	<div class="LunBo">
		<ul>
				<li class="CurrentPic"><img src="/myApp/Public/Images/pl11.jpg" width="960" height="380"></li>
				<li><img src="/myApp/Public/Images/pl22.jpg" width="960" height="380"></li>
				<li><img src="/myApp/Public/Images/pl33.jpg" width="960" height="380"></li>
				<li><img src="/myApp/Public/Images/pl44.jpg" width="960" height="380"></li>
				<li><img src="/myApp/Public/Images/pl55.jpg" width="960" height="380"></li>
		</ul>
		<div class="LunBoNum">
				<span class="CurrentNum">1</span>
				<span>2</span>
				<span>3</span>
				<span>4</span>
				<span>5</span>
		</div>
		</div>
	
	<div id="paudio">
    	<div class="list_song">
            	<span>今日歌曲</span>
				<hr/>
            	<ul>
				<?php if(is_array($music)): foreach($music as $key=>$v): ?><li>　<?php echo ($v["mus_name"]); ?>--<?php echo ($v["actor"]); ?>　　<a href="<?php echo U('Index/mood');?>" title="写心情"><img width="32px"height="32px" src="/myApp/Public/Images/notepad.png" /></a></li>
					<hr color="#74b608" size="1"/><?php endforeach; endif; ?>
            	</ul>
            </div>
    	<div class="music_wrap">
		<div class="artist_info">
			<div class="artist_avatar">
				<img />
			</div>
			<div class="artist">歌手</div>
			<div class="artist_name">歌手</div>
		</div>

		<div class="track">
			<div class="music_name">歌曲</div>
			<div class="music_album">专辑</div>
		</div>

		<div class="control">
			<div class="option">
				<div class="time">00:00</div>
				<div class="volume" title="音量">
					<p>&#xe604;</p>
				</div>
				<div class="volume_wrap hidden">
					<div class="volume_bar">
						<div class="volume_now"></div>
					</div>
				</div>
				<ul id="option_list">
					<li class="repeat" title="单曲循环">&#xe609;</li>
					<li class="shuffle" title="随机播放">&#xe608;</li>
					<li class="list" title="列表循环">&#xe606;</li>
				</ul>
			</div>

			<div class="progress_bar" id="bar">
				<div class="progress"></div>
				<div class="buffer"></div>
			</div>

			<div class="action_button">
				<div class="prev" title="上一首">&#xe60d;</div>
				<div class="play" title="播放" id="play">&#xe60a;</div>
				<div class="pause hidden" title="暂停">&#xe60b;</div>
				<div class="next" title="下一首">&#xe60c;</div>
			</div>
		</div>

		<audio id="audio">
			<p>您的浏览器不支持HTML5播放器呢！赶紧换一个最新的呗^_^.</p>
		</audio>
	</div>
	</div>
	
    	<div class="art_aside">
    	<ul class="aside_ul">
            <li><figure class="winston"><img src="/myApp/Public/Images/p1.png"/>
            	<figcaption>
            		<h2>
            			云同步
            			<br>
            			<br>
            		<span>音乐无处不在...</span>
            		</h2>
            	</figcaption>
            	
            </figure></li>
            <li><figure class="winston"><img src="/myApp/Public/Images/p2.png"/>
            	<figcaption>
            		<h2>
            			300万正版音乐
            			</br>
            			</br>
            		<span>媲美完美音质...</span>
            		</h2>
            	</figcaption>
            	
            </figure></li>
            <li><figure class="winston"><img src="/myApp/Public/Images/p3.png"/>
            	<figcaption>
            		<h2>
            			极速播放体验
            			<br>
            			<br>
            		<span>即点即播...</span>
            		</h2>	
            	</figcaption>
            
            </figure></li>
            <li><figure class="winston"><img src="/myApp/Public/Images/p4.png"/>
            	<figcaption>
            		<h2>
            			你的音乐
            			<br>
            			<br>
            		<span>你的个性...</span>
            		</h2>
            	</figcaption>
            </figure></li>
        </ul>		
    	</div>
    	<section class="new_sec">
    	 <div class="new_song">
                <div class="album"><img src="/myApp/Public/Images/album.png"></div>
                <div class="album_ft">来自各大唱片公司的最新专辑，<span>独家首发</span>，赶紧带上你的耳机享受吧！</div>
               <ul>
                   <li>
                       <a href="#"><img src="/myApp/Public/Images/m1.jpg"></a>
                       <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/Images/m2.jpg" ></a>
                       <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/Images/m3.jpg"></a>
                        <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/Images/m4.jpg"></a>
                      <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
					</li>
					 <li>
                       <a href="#"><img src="/myApp/Public/Images/m4.jpg"></a>
                      <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
					</li>
					 <li>
                       <a href="#"><img src="/myApp/Public/Images/m4.jpg"></a>
                      <div>
                       	<a href="#"><span>绅士</span></a>
                       	<br>
                       <a href="#"><span>薛之谦</span></a>
                       	<br>
                      <span>2015-10</span>
                       </div>
					</li>
               </ul>
            </div>
            
            
    	</section>
    
    
    
    
    
    </article>
<footer>
        <div class="foot">
            <p>版权所有 翻版必究</p>
            <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
        </div>
    </footer>

    <script>
var PicTotal = 5;
var CurrentIndex;
var ToDisplayPicNumber = 0;
$("div.LunBo div.LunBoNum span").click(DisplayPic);
function DisplayPic() {
// 测试是父亲的第几个儿子
CurrentIndex = $(this).index();
// 删除所有同级兄弟的类属性
$(this).parent().children().removeClass("CurrentNum")
// 为当前元素添加类
$(this).addClass("CurrentNum");
// 隐藏全部图片
var Pic = $(this).parent().parent().children("ul");
$(Pic).children().fadeOut();
// 显示指定图片
$(Pic).children("li").eq(CurrentIndex).fadeIn();
}
function PicNumClick() {
ToDisplayPicNumber = (ToDisplayPicNumber + 1) % PicTotal;
$("div.LunBo div.LunBoNum span").eq(ToDisplayPicNumber).trigger("click");
setTimeout("PicNumClick()",3500);
}
setTimeout("PicNumClick()",3500);
</script>
</body>
</html>