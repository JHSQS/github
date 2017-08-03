<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>好友管理</title>
    <style>
        table {width:800px;margin:0 auto;text-align:center;border:1px solid #ccc;}
        table tr th{ font-family: "微软雅黑"; font-size: 25px;color: #1a4a72;}
        table tr td{ font-family: "微软雅黑"; font-size: 20px;color: #1a4a72; }

    </style>
</head>
<body>
<table border="1px"  cellpadding="0" cellspacing="0">
    <tr>
        <th>昵称</th>
        <th>性别</th>
        <th>头像</th>
        <th>注册时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($friend)): foreach($friend as $key=>$v): ?><tr>
        <td><?php echo ($v["username"]); ?></td>
        <td><?php echo (check_sex($v["sex"])); ?></td>
        <td><img src="<?php echo ($v["face"]); ?>"/></td>
        <td><?php echo (date('Y-m-d H:i',$v["reg_time"])); ?></td>
        <td colspan="4">　|　<a href="<?php echo U('Manger/deletefriend',array(id=>$v['id']));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>

<tr>
    <td colspan="6"><?php echo ($page); ?></td>

</tr>
</table>
</body>
</html>