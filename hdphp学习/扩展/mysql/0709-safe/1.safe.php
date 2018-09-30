<?php 
$link = @new mysqli('127.0.0.1','root','','project');
if($link->connect_errno) die($link->connect_error);
$sql ='SET CHARACTER_SET_CLIENT=BINARY,CHARACTER_SET_CONNECTION=GBK,CHARACTER_SET_RESULTS=GBK';
$link->query($sql);
//获得uid
$uid = isset($_GET['uid']) ? $_GET['uid'] : 3;
//转义
//如果系统没有开启自动转义，手动转
if(!get_magic_quotes_gpc()){
	$uid = addslashes($uid);
}
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