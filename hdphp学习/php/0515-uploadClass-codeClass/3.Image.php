<?php 
//1.发送头部，声明为图像
header('Content-type:image/png');
//2.创建500x500画布(返回资源)
$img = imagecreatetruecolor(500, 500);
//3.调色
$blue = imagecolorallocate($img, 35, 174, 239);
//4.填充画布
//填充画布
imagefill($img, 0, 0, $blue);
//5.输出图像
imagepng($img);
//6.释放资源
imagedestroy($img);








 ?>