<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"C:\wamp\www\thinkphp5./app/home\view\index\index.html";i:1492753136;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eexcel</title>
    <link rel="stylesheet" href="/public__CSS__/file.css">
</head>
<body>
<form action="<?php echo url('index/uploads'); ?>" method="post" enctype="multipart/form-data">
	<div class="z_file fl">
		<img src="/public__STATIC__/img/a11.png" class="add-img">
		<input type="file" name="img" value="" class="file" multipte />
		<input type="hidden" name="file_hidden[img]" value="img" />
	</div>
	<div class="z_file fl">
		<img src="/public__STATIC__/img/a11.png" class="add-img">
		<input type="file" name="file" value="" class="file" multipte />
		<input type="hidden" name="file_hidden[file]" value="file" />
	</div>
	<div class="z_file fl">
		<img src="/public__STATIC__/img/a11.png" class="add-img">
		<input type="file" name="csv" value="" class="file" multipte />
		<input type="hidden" name="file_hidden[csv]" value="csv" />
	</div>
    <input type="submit" value="确定" />
</form>
</body>
</html>