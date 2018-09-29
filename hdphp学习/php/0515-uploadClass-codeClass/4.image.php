<?php 
//1.发送头部，声明为图像
header('Content-type:image/png');
//2.创建500x300画布(返回资源)
$img = imagecreatetruecolor(500, 300);
//3.调色
$red = imagecolorallocate($img, 255, 0, 0);
//4.画图形
//填充背景色
//$white = imagecolorallocate($img, 255, 255, 255);
//imagefill($img, 0, 0, $white);
//空心圆
imageellipse($img, 250, 150, 200, 200, $red);
//实心圆
$grey = imagecolorallocate($img, 184, 184, 184);

imagefilledellipse($img, 250, 150, 150, 150, $grey);
//空心矩形
imagerectangle($img, 20, 20, 120, 120, $red);
//实心矩形
imagefilledrectangle($img, 20, 140, 100, 100, $red);
//线
imageline($img, 0, 150, 500, 150, $red);
imageline($img, 250, 0, 250, 300, $red);

//点
for ($i=0; $i < 3000; $i++) {
	//随机颜色
	$color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
	//点的位置随机
	imagesetpixel($img, mt_rand(0, 500), mt_rand(0, 300), $color);
}


//5.输出图像
imagepng($img);
//6.释放资源
imagedestroy($img);








 ?>