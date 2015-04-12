<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎使用</title>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["id"]); ?></li>
		<li><?php echo ($vo["realname"]); ?></li>
		<li><?php echo ($vo["towho"]); ?></li>
		<li><?php echo ($vo["content"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>