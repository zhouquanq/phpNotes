<?php 
header('Content-type:text/html;charset=utf-8');
//1.连接mysql，选中库
//@ 抑错符 可以屏蔽错误
$link = @new Mysqli('127.0.0.1','root','','c49');
//如果有连接错误
if($link->connect_errno) die($link->connect_error);
//2.设置字符集
$link->query("SET NAMES UTF8");
//3.查询，修改，删除...操作
$result = $link->query("SELECT * FROM article");
//如果有错误输出错
if($link->errno) die($link->error);
//返回受影响条数
echo "受影响条数：" . $link->affected_rows;

$rows = array();
//获得一条数据
while ($row = $result->fetch_assoc()) {
	//把每一条压入数组
	$rows[] = $row;
}
var_dump($rows);
//4.释放结果集，关闭mysql连接
$result->free();
$link->close();






