<?php 
include "../functions.php";
//创建一个检测文件是否为图片的函数
function is_pic($name){
	//获得扩展名
	$type = ltrim(strrchr($name, '.'),'.');
	//允许的类型
	$allowType = array('png','gif','jpeg','jpg');
	//在不在一个数组中
	if(in_array($type, $allowType)){
		return true;
	}
	return false;
}

if(IS_POST){
	$bool = is_pic($_POST['up']);
	if($bool){
		success('是图片，可以上传', './3.lianxi-2.php');
	}else{
		success('不是图片', './3.lianxi-2.php');
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
 	<form action="" method="post">
 		<input type="file" name="up" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 </body>
 </html>













