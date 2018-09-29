<?php 
header('Content-type:image/png');
$img = imagecreatetruecolor(200, 50);
$white = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0, $white);

//写字
//验证码种子
$seed = "1234567890qweyuiopasdklzxcvbnm";
for ($i=0; $i < 4; $i++) {
	//随机一位验证码
	$text = $seed[mt_rand(0, strlen($seed) - 1)];
	//随机颜色
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
	//算出x坐标 $i * 宽度/4
	$x = $i * (200 / 4) + 10;
	//(画布高度+字体高度)/2
	$y = (50 + 30) / 2;
	//开始写字
	imagettftext($img, 30, mt_rand(-45, 45), $x, $y, $color, './font.ttf', $text);
}

//干扰
//点
for ($i=0; $i < 300; $i++) {
	//随机颜色
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
	//点的位置随机
	imagesetpixel($img, mt_rand(0, 200), mt_rand(0, 50), $color);
}

for ($i=0; $i < 3; $i++) {
	//随机颜色
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
	//线
	imageline($img, mt_rand(0, 200), mt_rand(0, 50), mt_rand(0, 200), mt_rand(0, 50), $color);
}

for ($i=0; $i < 10; $i++) {
	//随机颜色
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
	//圆的宽高
	$wh = mt_rand(0, 20);
	//圆
	imageellipse($img, mt_rand(0, 200), mt_rand(0, 50), $wh, $wh, $color);
}


imagepng($img);
imagedestroy($img);


 ?>