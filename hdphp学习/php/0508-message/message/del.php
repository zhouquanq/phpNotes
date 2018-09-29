<?php 
include "../../functions.php";
//删除处理
//1.获得数据库
$data = include "./data.php";
//2.获得下标,强制转整
$id = (int)$_GET['cid'];
//3.删除数组变量unset
unset($data[$id]);
//4.写入数据库
data_to_file($data, './data.php');
//5.成功提示
success('删除成功', './index.php');













 ?>