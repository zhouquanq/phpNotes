<?php 
include "../../functions.php";
//载入数据库
$data = include "./data.php";
//如果是POST提交
if(IS_POST){
	//给数组追加一个
	$data[] = $_POST;
	//写入数据库
	data_to_file($data, './data.php');
	success('发表成功','./index.php');
	
}





 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 	<!--载入bootstrap-->
 	<script src="../../jquery-1.11.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<link rel="stylesheet" type="text/css" href="../../bootstrap-3.3.4-dist/css/bootstrap.min.css"/>
 	<script src="../../bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
 	
 </head>
 <body>
 	<table border="1" class="table table-hover">
 		<?php foreach($data as $k => $v): ?>
	 		<tr>
	 			<td><?php echo $k ?></td>
	 			<td><?php echo $v['nickname'] ?></td>
	 			<td><?php echo $v['content'] ?></td>
	 			<td>
	 				<a href="./edit.php?id=<?php echo $k ?>" class="btn btn-primary btn-xs">修改</a>
	 				<a href="javascript:void(0)"  cid="<?php echo $k ?>" class="btn btn-danger btn-xs del">删除</a>
	 			</td>
	 		</tr>
 		<?php endforeach ?>
 	</table>
 	<script type="text/javascript">
 		$('.del').click(function(){
 			//获得每一个删除按钮上的cid
 			var cid = $(this).attr('cid');
 			//确定删除吗？，点击确定就跳转
   			if(confirm('确定删除吗？')){
   				//跳转
   				location.href="./del.php?cid=" + cid;
   			}
 		})
 		
 		
 	</script>
 	<form action="" method="post">
 		昵称：<input type="text" name="nickname" id="" />
 		<br />
 		内容：<textarea name="content" id="" cols="30" rows="10"></textarea>
 		<br />
 		<input type="submit" value="发表"/>
 	</form>
 
 



 </body>
 </html>
 







