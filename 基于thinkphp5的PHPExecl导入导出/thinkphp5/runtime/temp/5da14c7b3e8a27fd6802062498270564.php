<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"C:\wamp\www\thinkphp5./app/home\view\uploads\index.html";i:1492761508;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="<?php echo url('uploads/import'); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="csv" multipte>
    <input type="hidden" name="file_hidden[csv]" value="csv" />
    <input type="submit" value="import">
</form>
<table border="1" cellspacing="0" cellpadding="1" bordercolor="#ccc">
    <tr  align="center">
        <th>编号</th>
        <th>文章ID</th>
        <th>标题</th>
    </tr>
    <?php if(is_array($name) || $name instanceof \think\Collection || $name instanceof \think\Paginator): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$items): $mod = ($i % 2 );++$i;?>
        <tr  align="center">
            <td><?php echo $items['id']; ?></td>
            <td><?php echo $items['specialid']; ?></td>
            <td><a href="<?php echo $items['url']; ?>" style="text-decoration: none; color: black"><?php echo $items['title']; ?></a></td>
        </tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>