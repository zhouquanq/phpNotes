<?php 
//相当于把tpl.html直接拿过来
//引入tpl.html
$var = '后盾网';
//相同点：include 和 require 都是载入的意思
//不同点：require会产生一个致命错误，程序无法继续执行，而include 不会，如果有错，程序还可以走
include "1tpl.html";
echo 333;



 ?>