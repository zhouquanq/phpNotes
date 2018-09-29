<?php
include "./functions.php";
date_default_timezone_set('PRC');
//1.载入Smarty
require "./Smarty/Smarty.class.php";

//2.配置Smarty
$smarty = new Smarty;
//模版目录
$smarty->template_dir = "template";
//编译目录 
$smarty->compile_dir = "temp/compile"; 
//缓存目录
$smarty->cache_dir = "temp/cache";
//开始定界符
$smarty->left_delimiter = "{hd";
//结束定界符
$smarty->right_delimiter = "}";

//分配变量
$smarty->assign('houdun','后盾网，人人做后盾');

//分配数组
$data = array(
	'title' => '今天消防演习了',
	'time' => time(),
	'info' => array(
		'url' => 'http://www.houdunwang.com'
	)
);
$smarty->assign('data',$data);

define('ROOT_PATH', './');

session_start();
$_SESSION['uid'] = 5;

$smarty->assign('letter','abc');


$smarty->assign('title','中华人民共和国今天成立啦！');

//从数据库获得数组，为了练习foreach
$arcData = query("SELECT * FROM article");
$smarty->assign('arcData',$arcData);


//载入模板
$smarty->display('index.html');










