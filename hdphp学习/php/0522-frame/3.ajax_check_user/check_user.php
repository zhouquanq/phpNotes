<?php 
//检测用户名是否存在脚本
include "../../functions.php";
//前台发过来的用户名
$username = $_POST['uname'];
//载入数据库
$data = include "./data.php";
foreach ($data as $v) {
	if($v['username'] == $username){
		//用户名已存在
		echo 0;
		//为了不往下执行，并不是返回东西
		return;
	}
}
//证明可以注册
echo 1;







 ?>