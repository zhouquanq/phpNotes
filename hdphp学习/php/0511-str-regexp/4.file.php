<?php 
include "../functions.php";
//是否可写
//$bool = is_writable('../functions.php');
//var_dump($bool);

//是否可读
//$bool = is_readable('../functions.php');
//var_dump($bool);

//返回文件大小
//echo filesize('../functions.php');

//读到functions里面所有的信息
//echo file_get_contents('../functions.php');

//获得文件修改时间
$time = filemtime('../functions.php');
echo date('Y-m-d H:i:s',$time);








 ?>