<?php
include "../functions.php";
//上传信息数组
//p($_FILES);
if(!empty($_FILES)){
	//判断是否是合法上传文件
	if(is_uploaded_file($_FILES['up']['tmp_name'])){
		//上传目录
		$path = './upload';
		is_dir($path) || mkdir($path,0777,true);
		//获得类型
		$type = ltrim(strrchr($_FILES['up']['name'], '.'),'.');
		//完整路径
		$fullPath = $path . '/' . time() . mt_rand(0, 99999) . '.' . $type;
		//echo $fullPath;exit;
		//把临时文件移动，就是上传
		move_uploaded_file($_FILES['up']['tmp_name'], $fullPath);
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
 	<!--1.file类型的input必须有name值-->
 	<!--2.必须在form里面加enctype="multipart/form-data"-->
 	<form action="" method="post" enctype="multipart/form-data">
 		<!--限制文件最大为30kb左右-->
 		<!--<input type="hidden" name="MAX_FILE_SIZE" value="30000">-->
 		<input type="file" name="up" id="" />
 		<input type="submit" value="上传"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>