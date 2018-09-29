<?php 
//目标图资源
$dstImg = imagecreatetruecolor(260, 80);
//源图资源
$srcImg = imagecreatefromjpeg('./kuaixuewang.jpg');
$srcW = imagesx($srcImg);
$srcH = imagesy($srcImg);

//缩略
imagecopyresized($dstImg, $srcImg, 0, 0, 0, 0, 260, 80, $srcW, $srcH);

//保存缩略图
imagejpeg($dstImg,'./kuaixuewang_thumb.jpg');
imagedestroy($dstImg);
imagedestroy($srcImg);











 ?>