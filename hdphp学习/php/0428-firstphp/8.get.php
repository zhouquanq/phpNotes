<?php 
//重点就是知道怎么传递get参数，怎么输出get参数

header('Content-type:text/html;charset=utf-8');
//http://127.0.0.1/c49/0428-firstphp/8.get.php?page=1&cid=2
//$_GET外部变量，get参数获得的数组（数组）
var_dump($_GET);
//打印具体的get参数的值
var_dump($_GET['page']);

if($_GET){
	echo "您看到的是第" . $_GET['page'] . "页";	
}






 ?>