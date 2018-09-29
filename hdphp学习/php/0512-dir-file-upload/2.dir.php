<?php 
//$path = './a/b/c/1.html';
//$path = './a/b/c';
//返回路径最后一部分，有可能是文件也有可能是文件夹
//echo basename($path);

////$path = './a/b/c/1.html';
//$path = './a/b/c';
//返回除了最后一部分路径
//echo dirname($path);

//判断文件是否存在
//$bool = file_exists('./zuoye1.php');
//var_dump($bool);

//判断是否是一个目录
//$bool = is_dir('../0511-str-regexp');
//var_dump($bool);


//短路，前面不成立，走后面
//mkdir 0777就是最高权限，后面linux要详细讲解
//mkdir true 递归创建，就是创建多层目录
//is_dir('./a/b/c/d') || mkdir('./a/b/c/d',0777,true);

//将框架所需要的目录全部创建,包括temp/cache module templete
//$dirArr = array(
//	'temp/cache',
//	'module',
//	'template'
//);
//foreach ($dirArr as $v) {
//	is_dir($v) || mkdir($v,0777,true);
//}

//删除目录（必须目录为空）
//如果是一个目录，才走后面
//is_dir('./a') && rmdir('./a');












 ?>