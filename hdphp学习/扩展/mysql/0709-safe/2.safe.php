<?php 
$link = @new mysqli('127.0.0.1','root','','project');
if($link->connect_errno) die($link->connect_error);
//使用mysqli的方式设置字符集
$link->set_charset('GBK');
//获得uid
$uid = isset($_GET['uid']) ? $_GET['uid'] : 3;
//如果系统开启的自动转义，那么反转义回来
if(get_magic_quotes_gpc()){
	$uid = stripslashes($uid);
}
//mysqli的方式转义
$uid = $link->real_escape_string($uid);
//sql
$sql = "SELECT * FROM ccshop_user WHERE uid='{$uid}'";
echo $sql;
$result = $link->query($sql);
$rows = array();
while ($row = $result->fetch_assoc()) {
	$rows[] = $row;
}
echo '<pre>';
print_r($rows);

$result->free();
$link->close();









 ?>