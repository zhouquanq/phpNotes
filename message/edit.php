<?php
include("./cont.php");
include("./functions.php");

if(IS_POST){
	//给数组追加一个
	$id = $_POST['id'];
	$user = $_POST['user'];
	$content = $_POST['content'];
	//写入数据库
	$sql = "update message set user='$user',content='$content' where id=$id";
	if($link->query($sql) === TRUE){
		success('修改成功！','./index.php');
	}
}else{
	if(!empty($_GET['id'])){
	    $id = $_GET['id'];
	    $sql = "select * from message where id = ".$_GET['id'];
	    $query = $link->query($sql);
	    $query = mysqli_fetch_assoc($query);
	}else{
		error('非法进入！');
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改页面</title>
</head>
<body>
<div align="center">
<form action="edit.php" method="post">
  昵称：<input type="text" name="user" value="<?php echo $query['user'];?>"/>
  <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
  <br />
  内容：<textarea rows="5" cols="50" name="content"><?php echo $query['content'];?></textarea>
  <br />
  <input type="submit" name="update" value="修改"/>
  <br />
</form>
</div>
</body>
</html> 