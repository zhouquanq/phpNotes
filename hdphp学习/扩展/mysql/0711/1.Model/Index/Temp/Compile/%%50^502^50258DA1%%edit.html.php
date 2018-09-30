<?php /* Smarty version 2.6.26, created on 2015-07-13 14:06:54
         compiled from /www/project/mysql/0711/1.Model/Index/View/Index/edit.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			商品名称：<input type="text" name="gname" id="" value="<?php echo $this->_tpl_vars['oldData']['gname']; ?>
"/>
			<br />
			市场价格：<input type="text" name="marketprice" id="" />
			<br />
			商品价格：<input type="text" name="shopprice" id="" />
			<br />
			<input type="hidden" name="gid" value="<?php echo $_GET['gid']; ?>
"/>
			<input type="submit" value="修改"/>
		</form>
	</body>
</html>