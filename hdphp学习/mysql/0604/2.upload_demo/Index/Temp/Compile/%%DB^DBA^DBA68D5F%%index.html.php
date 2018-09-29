<?php /* Smarty version 2.6.26, created on 2015-06-04 14:18:02
         compiled from D:/wamp/www/c49/mysql/0604/2.upload_demo/Index/View/Index/index.html */ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<img src="<?php echo @__ROOT__; ?>
/<?php echo $this->_tpl_vars['userInfo']['0']['face']; ?>
" style="width: 200px;height: 200px;"/>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="up" id="" />
			<input type="submit" value="上传"/>
		</form>
	</body>
</html>