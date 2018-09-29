<?php 
//1.cookie名字 
//2.cookie值
//3.cookie过期时间,必须加上时间戳 0代表会话结束过期
//4.cookie作用路径,一般设置为 / 根目录
setcookie('cart','iphone6',time() + 3600,'/');

$cart = array(
	array(
		'shop' => 'iphone6',
		'num'  => 1
	),
	array(
		'shop' => '阿迪达斯',
		'num'  => 2
	),
);
//序列化，把数组转为字符串，因为cookie不能存数组
$cartStr = serialize($cart);
setcookie('jdcart',$cartStr,0,'/');











 ?>