<?php 
//isset 检测变量是否存在
//因为第一次刷新页面的时候，用户没有提交，$_POST['username']不存在的
$username =  isset($_POST['username']) ? $_POST['username'] : '默认值';
echo $username;
 ?>
 <html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 		<form action="" method="post">
 			<input type="text" name="username" id="" />
 			<input type="submit" value=""/>
 		</form>
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 		
 	</body>
 </html>