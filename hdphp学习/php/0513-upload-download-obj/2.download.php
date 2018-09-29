<?php 
$file="./houdunwang.jpg";
//二进制文件
header("Content-type:application/octet-stream");
//获得文件名
$fileName = basename($file);
//下载窗口中显 示的文件名
header("Content-Disposition:attachment;filename={$fileName}");
//文件尺寸单位
header("Content-ranges:bytes");
//文件大小
header("Content-length:".filesize($file));
//读出文件内容
readfile($file);

 ?>