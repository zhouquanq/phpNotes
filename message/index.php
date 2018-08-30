<?php 
include "./functions.php";
//载入数据库
$data = include "./cont.php";
//POST提交
if(IS_POST){
	//给数组追加一个
	$user = $_POST['user'];
	$content = $_POST['content'];
	//写入数据库
	$sql = "insert into message (user,content) VALUES ('$user','$content')";
	if($link->query($sql) === TRUE){
		success('发表成功！','./index.php');
	}
	success('发表成功','./index.php');
	
}else{
	$sql = "select * from `message` order by id desc";
	$data = $link->query($sql);
}
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>留言板</title>
 	<!--载入bootstrap-->
 	<script src="./jquery-1.11.2.min.js" type="text/javascript" charset="utf-8"></script>
 	<link rel="stylesheet" type="text/css" href="./bootstrap-3.3.4-dist/css/bootstrap.min.css"/>
 	<script src="./bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>	
 </head>
 <body>
 	<div align="center">
 	<table border="1" class="table table-hover">
 		<?php while($row = $data->fetch_assoc()) { ?>
	 		<tr>
	 			<td><?php echo $row['id'] ?></td>
	 			<td><?php echo $row['user'] ?></td>
	 			<td><?php echo $row['content'] ?></td>
	 			<td>
	 				<a href="./edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-xs">修改</a>
	 				<a href="javascript:void(0)"  cid="<?php echo $row['id'] ?>" class="btn btn-danger btn-xs del">删除</a>
	 			</td>
	 		</tr>
 		<?php } ?>
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
 		昵称：<input type="text" name="user" id="" />
 		<br />
 		内容：<textarea name="content" id="" cols="30" rows="10"></textarea>
 		<br />
 		<input type="submit" value="发表"/>
 	</form>
	</div>
	</body>
 </html>
 







