<?php 
//连接数据库
$mysqli = @new Mysqli('127.0.0.1','root','','protest');
//如果有连接错误，输出错误
if($mysqli->connect_errno) die($mysqli->connect_error);
//设置字符集
$mysqli->query("SET NAMES UTF8");
//开启事务
$mysqli->query('BEGIN');
//关闭自动提交
$mysqli->query('SET AUTOCOMMIT=0');
//交易过程
//小黄扣掉500
$sql = "UPDATE bank SET money=money-500 WHERE bid=1";
$mysqli->query($sql);
if($mysqli->errno){
	//回滚
	$mysqli->query('ROLLBACK');
	die;
}
//小红加上500
$sql = "UPDATE bank SET money=money+500 WHERE bid=2";
$mysqli->query($sql);
if($mysqli->errno){
	$mysqli->query('ROLLBACK');
	die;
}
//最后都成功
$mysqli->query('COMMIT');

 ?>