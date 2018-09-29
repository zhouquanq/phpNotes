<?php 
//单入口
include "../../functions.php";
//载入数据库
$data = include "./data.php";
//实例化文章管理控制器
$arcObj = new ArticleController($data);
//方法动作
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$arcObj->$action();

 ?>