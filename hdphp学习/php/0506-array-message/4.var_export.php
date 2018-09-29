<?php 
include "../functions.php";
//载入数据库
$data = include "./data.php";
//如果是POST提交
if(IS_POST){
	//给数组追加一个
	$data[] = $_POST;
	//返回合法的PHP代码
	//如果传递第二个参数，不会直接输出，而是返回给变量
	$phpCode = var_export($data,true);
	//把字符串写入文件里面
	file_put_contents('./data.php', "<?php return $phpCode ?>");
}





 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 	<!--载入bootstrap-->
 	<script src="../jquery-1.11.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.4-dist/css/bootstrap.min.css"/>
 	<script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
 </head>
 <body>
 	<table border="1" class="table table-hover">
 		<?php foreach($data as $v): ?>
	 		<tr>
	 			<td><?php echo $v['nickname'] ?></td>
	 			<td>内容</td>
	 			<td>
	 				<a href="" class="glyphicon glyphicon-pencil"> </a>
	 				<a href="" class="glyphicon glyphicon-remove"> </a>
	 			</td>
	 		</tr>
 		<?php endforeach ?>
 	</table>
 	<form action="" method="post">
 		昵称：<input type="text" name="nickname" id="" />
 		<br />
 		内容：<textarea name="content" id="" cols="30" rows="10"></textarea>
 		<br />
 		<input type="submit" value="发表"/>
 	</form>
 
 



 </body>
 </html>
 







