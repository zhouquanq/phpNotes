<?php 
//开启缓冲区
ob_start();
echo "http://www.houdunwang.com";
//获得缓冲区内容
$data = ob_get_contents();
//清除缓冲区
ob_clean();

file_put_contents('./data.php', $data);

 ?>