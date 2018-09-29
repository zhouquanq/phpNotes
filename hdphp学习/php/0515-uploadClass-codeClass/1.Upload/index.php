<?php 
include "../../functions.php";
//如果有文件上传
if(!empty($_FILES)){
	//实例化上传类
	$upload = new Upload();
	//执行上传方法
	//如果有错误，提示上传错误
	if(!$upload->up()){
		error($upload->error);
	}
}


 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post" enctype="multipart/form-data">
 		文件1：<input type="file" name="up[]" id="" />
 		<br />
 		文件2：<input type="file" name="up[]" id="" />
 		<br />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>