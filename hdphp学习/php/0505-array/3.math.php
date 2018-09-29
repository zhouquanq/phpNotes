<?php 
//向上取整
//$num = 1.1;
//echo ceil($num);

//向下取整
//$num = 1.9;
//echo floor($num);

//四舍五入
//$num = 1.5;
//echo round($num);

//获得最大值
//echo max(100,200,5,1,6);
//获得最小值
//echo min(100,5,-1,0);

//随机
$arr = array('red','green','blue','yellow','white');
$num = mt_rand(0, 4);

//代表 2的3次方 2*2*2
echo pow(2, 3);


 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
 <head>
 	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
 	<title>Document</title>
 	<style type="text/css">
 		body{
 			background: <?php echo $arr[$num] ?>;
 		}
 	</style>
 </head>
 </html>









