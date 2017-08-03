<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>音乐管理</title>

    <style>
        table {width:800px;margin:0 auto;text-align:center;border:1px solid #ccc;}
        table tr th{ font-family: "微软雅黑"; font-size: 25px;color: #1a4a72;}
        table tr td{ font-family: "微软雅黑"; font-size: 20px;color: #1a4a72; }

    </style>
</head>
<body>
<table border="1px"  cellpadding="0" cellspacing="0">
    <tr>
        <th>歌曲名称</th>
        <th>演唱</th>
        <th>发布时间</th>
        <th>操作</th>
        <th><a href="<?php echo U('manger/cmusic');?>">发布音乐</a></th>
    </tr>
    <?php if(is_array($music)): foreach($music as $key=>$v): ?><tr>
        <td><?php echo ($v["mus_name"]); ?></td>
        <td><?php echo ($v["actor"]); ?></td>
        <td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
        <td colspan="3">|　<a href="<?php echo U('Manger/deletemusic',array(id=>$v['id']));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>

<tr>
    <td colspan="5"><?php echo ($page); ?></td>

</tr>
</table>
</body>
</html>