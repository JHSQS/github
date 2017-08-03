<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发表日志</title>
    <style>
       body{background: url("/myApp/Public/Admin/Images/admin_bg.png")}
       section{width:1260px;height:620px;border:1px solid #ccc;box-shadow:1px 0 20px 1px #cccccc ;border-radius:10px 10px;background: url("/myApp/Public/Admin/Images/bg.jpg")}
       .up1{width: 800px; height:300px;border: 1px solid #ccc;margin: 120px 0 0 230px;text-align: center;}
       .up1 tr td{font-family: "微软雅黑";font-size: 20px;color: #1a4a72;}
       .up1 tr td input{width: 200px; height:30px;}
       .up1 tr td a{text-decoration: none;color:#1a4a72;}
       .up2{width: 800px; height:100px;border: 1px solid #ccc;margin: 10px auto;text-align: center;}
    </style>
</head>
<body>
<section>
    <form enctype="multipart/form-data" method="post" action="<?php echo U('Manger/uploadmusic');?>">
    <table border="1px" cellpadding="0" cellspacing="0" class="up1">
        <tr>
            <td>歌曲名称</td>
            <td><input type="text" name="mus_name"/></td>

        </tr>
        <tr>
            <td>演唱</td>
            <td><input type="text" name="actor"/></td>

        </tr>
        <tr>
            <td>音乐时长（秒）</td>
            <td><input type="text" name="mus_time"/></td>

        </tr>
        <tr>
            <td>音乐地址</td>
            <td><input type="text" name="adress" value="/myApp/raw/"/></td>

        </tr>
        <tr>
            <td>歌手图片</td>
            <td><input type="file" name="pic" /></td>

        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="发布" /></td>

        </tr>
    </table>
    </form>

</section>
</body>
</html>