<?php 
//1.界面一定要漂亮！
//2.不能没有php参与
//3.没有的功能，不要布局


	//数字1
	$num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
	$num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
	//运算符
	$operation = isset($_POST['operation']) ? $_POST['operation'] : '+';
	switch ($operation) {
		case '+':
			$result = $num1 + $num2;
			break;
		case '-':
			$result = $num1 - $num2;
			break;
		
		default:
			
			break;
	}





 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<h2>结果：<?php echo $result ?> </h2>
 	<form action="" method="post">
 		数字1：<input type="text" name="num1" id="" />
 		<br />
 		数字2：<input type="text" name="num2" id="" />
 		<br />
 		运算符：
 		<input type="radio" name="operation" id="" checked="" value="+"/>+
 		<input type="radio" name="operation" id="" value="-"/>-
 		<br />
 		<input type="submit" value="运算"/>
 	</form>
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 </body>
 </html>