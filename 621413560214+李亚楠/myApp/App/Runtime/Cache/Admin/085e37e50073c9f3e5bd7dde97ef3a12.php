<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>音乐心情管理</title>
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
        <th>心情</th>
        <th>时间</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($mood)): foreach($mood as $key=>$v): ?><tr>
        <td><?php echo ($v["username"]); ?></td>
        <td><?php echo (replace_phiz($v["content"])); ?></td>
        <td>2016-4-20</td>
        <td>|　<a href="<?php echo U('Manger/deletemood',array(id=>$v['id']));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>

    <tr>
        <td colspan="4"><?php echo ($page); ?></td>

    </tr>
</table>
</body>
</html>