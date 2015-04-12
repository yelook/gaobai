<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎使用</title>
</head>
<body>
<body>
	<form action="/gaobai/index.php/Home/Index/dotell" method="post">
	输入表白对象：<input type="text" name="towho"><br/>
	输入自己昵称：<input type="text" name="realname"><br/>
	表白的内容是：<textarea name="content" id="" cols="30" rows="10"></textarea><br/>
	<input type="submit" value="提交">
	</form>
</body>
</html>