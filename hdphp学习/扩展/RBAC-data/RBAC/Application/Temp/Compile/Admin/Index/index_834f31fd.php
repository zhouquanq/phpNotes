<?php if(!defined('HDPHP_PATH'))exit;C('SHOW_NOTICE',FALSE);?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<h2>管理员：<span style="color: red;"><?php echo $hd['session']['username'];?></span> <a href="<?php echo U('Login/out');?>">退出</a></h2>
	<ul>
		<li>分类管理</li>
		<li> <a href="<?php echo U('Cate/add');?>">分类添加</a></li>
		<li> <a href="<?php echo U('Cate/index');?>">分类展示</a></li>
	</ul>
	<ul>
		<li>商品管理</li>
		<li> <a href="<?php echo U('Goods/add');?>">商品添加</a></li>
	</ul>
	
	
	
	
	
	
</body>
</html>