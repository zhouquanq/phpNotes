<?php 
//载入函数
include "../../functions.php";
//载入数据库
$data = include "./data.php";
//控制器
$controller = isset($_GET['c']) ? ucfirst($_GET['c']) : 'Index';
//定义控制器常量（display方法有用到）
define('CONTROLLER', $controller);

//$controller = $controller . 'Controller';
$controller .= 'Controller';

//实例化控制器
$obj = new $controller($data);
//方法变量
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
//(display方法有用到）
define('ACTION', $action);

//执行控制器的方法
$obj->$action();









 ?>