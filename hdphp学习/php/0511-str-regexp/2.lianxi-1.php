<?php 
//将提交的$_POST['message']进行实体与转义处理 
include "../functions.php";
if(IS_POST){
	$newStr = addslashes(htmlspecialchars($_POST['message']));
	echo $newStr;
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
 		<input type="text" name="message" id="" />
 		<input type="submit" value="发布"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>