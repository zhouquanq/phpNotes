<?php 
var_dump($_POST);
var_dump($_POST['username']);


 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 </head>
 	<body>
 		<!--action不填写默认是当前页面-->
 		<form action="" method="post">
 			用户名：<input type="text" name="username" id="" />
 			<br />
 			密码：<input type="password" name="password" id="" />
 			<br />
 			<input type="submit" value="提交"/>
 		</form>
 	</body>
 
 
 
 
 
 
 
 
 
 
 
 </html>