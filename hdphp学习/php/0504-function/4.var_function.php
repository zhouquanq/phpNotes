<?php 
include "../functions.php";
//判断是不是post提交
if(IS_POST){
	$name = $_POST['up'];
	//获得扩展名(先理解成固定写法，后面要细讲)
	$type = ltrim(strrchr($name, '.'),'.');
	$fn = 'open_' . $type;
	//变量函数
	$fn();
}
function open_gif(){
	echo '打开gif图';
}
function open_jpg(){
	echo '打开jpg图';
}

function open_png(){
	echo '打开png图';
}

function open_bmp(){
	echo '打开bmp图';
}






 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<form action="" method="post">
 		<input type="file" name="up" id="" />
 		<input type="submit" value=""/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>