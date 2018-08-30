<?php 
header('Content-type:text/html;charset=utf-8');
//1.连接mysql，选中库
//@ 抑错符 可以屏蔽错误
$link = @new Mysqli('127.0.0.1','root','','test');
//如果有连接错误
if($link->connect_errno) die($link->connect_error);
//2.设置字符集
$link->query("SET NAMES UTF8");