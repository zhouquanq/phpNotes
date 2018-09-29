<?php
//载入函数
include "../../functions.php";
//载入数据库 
$data = include "./data.php";

//预先演示（实例需要注释掉它）********
//p($data);
//foreach ($data as $v) {
//	//打印顶级
//	p($v['top'] . '----');
//	//循环子集，并且打印
//	foreach ($v['son'] as $value) {
//		p($value);
//	}
//}
//预先演示**************************


//载入导航条模板
include "./demo.php";













 ?>