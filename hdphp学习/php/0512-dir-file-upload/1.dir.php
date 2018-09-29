<?php 
////获得硬盘总空间
//$size = disk_total_space('.');
////换算成G的级别,除以1024的3次方，1024*1024*1024
//echo $size / pow(1024, 3);
//
////获得硬盘自由空间
//$freeSize = disk_free_space('.');
//echo $freeSize / pow(1024, 3);

//获得文件大小
$size = filesize('../php5.chm');
switch (true) {
	case $size > pow(1024, 3):
		$unit = array(3,'G');
		break;
	case $size > pow(1024, 2):
		$unit = array(2,'M');
		break;
	case $size > pow(1024, 1):
		$unit = array(1,'KB');
		break;
	default:
		$unit = array(0,'B');
		break;
}
//round 四舍五入，第二个参数为1，就是保留一位小数
echo round($size / pow(1024, $unit[0]),1) . $unit[1];













 ?>