<?php 
include "../../functions.php";
//编辑
//一、获得旧内容****************
//1.引入数据库
$data = include "./data.php";
//2.获得下标
$id = (int)$_GET['id'];
//3.获得旧内容
$oldData = $data[$id];
//二、完成修改********************
if(IS_POST){
	//所谓的修改，就是覆盖原来的
	$data[$id] = $_POST;
	//写入数据库
	data_to_file($data, './data.php');	
	success('修改成功', './index.php');
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
 		昵称：<input type="text" name="nickname" id="" value="<?php echo $oldData['nickname']; ?>"/>
 		<br />
 		内容：<textarea name="content" id="" cols="30" rows="10"><?php echo $oldData['content']; ?></textarea>
 		<br />
 		<input type="submit" value="修改"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>