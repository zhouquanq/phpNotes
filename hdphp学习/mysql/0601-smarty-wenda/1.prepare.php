<?php 
//预准备
$link = @new Mysqli('127.0.0.1','root','','c49');
//如果有连接错误
if($link->connect_errno) die($link->connect_error);
//设置字符集
$link->query("SET NAMES UTF8");
//返回预准备对象
$stmt = $link->prepare("INSERT INTO hd_user (username,passwd,restime) VALUES (?,?,?)");
//如果预准备出错
if(!$stmt) die($link->error);
//用户数据
$data = array(
	'username' => 'admin999',
	'passwd'   => md5('admin'),
	'restime'  => time()
);
//键名变为变量名，键值变为变量值
extract($data);
//绑定参数
$stmt->bind_param('ssi',$username,$passwd,$restime);
//执行
if($stmt->execute()){
	echo 'ok';
}else{
	//输出错误
	die($stmt->error);
}

//关闭
$link->close();
$stmt->close();












 ?>