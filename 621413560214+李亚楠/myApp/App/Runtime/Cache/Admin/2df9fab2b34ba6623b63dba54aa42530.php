<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加好友</title>
    <style>
        table {width:800px;margin:0 auto;text-align:center;border:1px solid #ccc;}
        table tr th{ font-family: "微软雅黑"; font-size: 25px;color: #1a4a72;}
        table tr td{ font-family: "微软雅黑"; font-size: 20px;color: #1a4a72;height:50px; }
        table tr td input.nam{width:200px; height:30px;}
        table tr td input.ag{width:50px; height:30px;}

    </style>
</head>
<body>
<form method="post" action="<?php echo U('Manger/checkaddfr');?>">
<table border="1px"  cellpadding="0" cellspacing="0">
    <tr>
      <td>昵称</td>
      <td><input type="text" name="username" placeholder="好友昵称" class="nam"/></td>
    </tr>
    <tr>
      <td>性别</td>
      <td>
          <input type="radio" name="sex" value="1"/>　男
          <input type="radio" name="sex" value="0"/>　女
      </td>
    </tr>
    <tr>
        <td>年龄</td>
        <td>
            <input type="text" name="age" class="ag"/>
        </td>

    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="submit"/></td>
    </tr>

</table>
</form>
</body>
</html>