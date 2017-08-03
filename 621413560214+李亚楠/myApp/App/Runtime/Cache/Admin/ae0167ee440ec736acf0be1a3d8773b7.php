<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>日志管理</title>

    <style>
        table {width:800px;margin:0 auto;text-align:center;border:1px solid #ccc;}
        table tr th{ font-family: "微软雅黑"; font-size: 25px;color: #1a4a72;}
        table tr td{ font-family: "微软雅黑"; font-size: 20px;color: #1a4a72; }

    </style>
</head>
<body>
<table border="1px"  cellpadding="0" cellspacing="0">
    <tr>
        <th>题目</th>
        <th>内容</th>
        <th>操作</th>
        <th><a href="<?php echo U('manger/cdelia');?>">发表日志</a></th>
    </tr>
    <?php if(is_array($delia)): foreach($delia as $key=>$v): ?><tr>
        <td><?php echo ($v["title"]); ?></td>
        <td><?php echo (_title($v["content"])); ?></td>
        <td colspan="2"><a href="<?php echo U('Manger/mdelia',array(id=>$v['id']));?>">修改</a>|　<a href="<?php echo U('Manger/deletedelia',array(id=>$v['id']));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>

<tr>
    <td colspan="5"><?php echo ($page); ?></td>

</tr>
</table>
</body>
</html>