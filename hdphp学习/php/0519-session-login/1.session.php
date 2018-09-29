<?php 
//设置保存路径
session_save_path("/Applications/MAMP/tmp/php_test");
//设置session_name
session_name('phptest');

//开启session
session_start();
$_SESSION['cart'] = 'byd';

 ?>