<?php 
include "../functions.php";
if(!empty($_FILES)){
	//调用上传函数
	up();
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
 		文件2：<input type="file" name="up[]" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>