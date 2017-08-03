<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>测试页面</title>
    <link rel="stylesheet" type="text/css" href="/myApp/Public/Css/basic.css" />
    <link rel="stylesheet" type="text/css" href="/myApp/Public/Css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/myApp/Public/Css/style.css" />
    <script type="text/javascript" src="/myApp/Public/Js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/gallery_init.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/roundabout.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/roundabout_shapes.js"></script>
    <script type="text/javascript" src="/myApp/Public/Js/index.js"></script>
</head>
<body>
<header class="header_div">
    <nav class="loading" id="head_nav">
    <div class="logo_p"><a href="/myApp/index.php"><img src="/myApp/Public/image/logo.png"/></a></div>
        <div class="logo_t">
            <span class="register"><a href="/myApp/index.php/Register/register">注册 </a>|</span>
            <span class="log"><a href="/myApp/index.php/Login/login">登录 </a>|</span>
            <span class="log"><a href="#" target="_blank">会员 </a>|</span>
        </div>
    </nav>
</header>
<aside class="aside">
    <nav class="nav_div">
        <ul class="index_nav">
       <li class="nav_01"><a href="/myApp/index.php">首页</a></li>
            <li class="nav_gap"></li>
            <li class="nav_02"><a href="#">duomi-中国风</a></li>
            <li class="nav_gap"></li>
            <li class="nav_03"><a href="#">duomi-现代风</a></li>
            <li class="nav_gap"></li>
            <li class="nav_09"><a href="#" target='_blank'>duomi-轻音乐</a></li>
            <li class="nav_gap"></li>
            <li class="nav_04" style="position: relative;"><a href="#" target='_blank'>duomi-彩铃声</a><img class="nav-new" src="/myApp/Public/image/nav_new.jpg"></li>
            <li class="nav_gap"></li>
            <li class="nav_06"><a href="#" target='_blank'>duomi-DJ</a></li>
            <li class="nav_gap"></li>
            <li class="nav_08"><a href="#">duomi-歌单</a></li>
        </ul>
    </nav>
</aside>
<article class="body_art">
    <section id="gallery">
        <div class="container">
            <ul id="myRoundabout">
                <li><img src="/myApp/Public/image/pl11.jpg" alt="imgpl11.jpg"></li>
                <li><img src="/myApp/Public/image/pl22.jpg" alt="imgpl22.jpg"></li>
                <li><img src="/myApp/Public/image/pl33.jpg" alt="imgpl33.jpg"></li>
                <li><img src="/myApp/Public/image/pl44.jpg" alt="imgpl44.jpg"></li>
                <li><img src="/myApp/Public/image/pl55.jpg" alt="imgpl55.jpg"></li>
            </ul>
        </div>
    </section>
    <aside class="art_aside">
        <ul class="aside_ul">
            <li><img src="/myApp/Public/image/p1.png"/></li>
            <li><img src="/myApp/Public/image/p2.png"/></li>
            <li><img src="/myApp/Public/image/p3.png"/></li>
            <li><img src="/myApp/Public/image/p4.png"/></li>
        </ul>
    </aside>
    <section class="new_sec">
            <div class="new_song">
                <div class="album"><img src="/myApp/Public/image/album.png"><span><a href="#">更多&gt;&gt;</a></span></div>
                <div class="album_ft">来自各大唱片公司的最新专辑，<span>多米独家首发</span>，赶紧带上你的耳机享受吧！</div>
               <ul>
                   <li>
                       <a href="#"><img src="/myApp/Public/image/m1.jpg"></a>
                        <span>

                        </span>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/image/m2.jpg"></a>
                       <span>

                        </span>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/image/m3.jpg"></a>
                        <span>

                        </span>
                   </li>
                   <li>
                       <a href="#"><img src="/myApp/Public/image/m4.jpg"></a></li>
                       <span>

                        </span>
               </ul>
            </div>
            <div class="new_act">
                <div class="act"><img src="/myApp/Public/image/activity.png"><span><a href="#">更多&gt;&gt;</a></span></div>
                <ul>
                    <li><img src="/myApp/Public/image/l1.jpg"></li>
                    <li><img src="/myApp/Public/image/l2.jpg"></li>
                    <li><img src="/myApp/Public/image/l3.jpg"></li>
                    <li><img src="/myApp/Public/image/l4.jpg"></li>
                </ul>
            </div>
    </section>
    <footer class="index_footer">
        <div class="foot">
            <p>版权所有 翻版必究</p>
            <p>本程序是由<span>多米音乐</span>指导制作@lyn</p>
        </div>
    </footer>
</article>
</body>
</html>