<?php 
//打开目标图资源（大图）
$dstImg = imagecreatefromjpeg('./kuaixuewang.jpg');
//打开源图资源（小的水印图）
$srcImg = imagecreatefromjpeg('./logo.jpg');
//获得源图宽高
$srcW = imagesx($srcImg);
$srcH = imagesy($srcImg);

//加盖水印
//30,30是目标图位置，0,0要把整个源图全部贴上去
imagecopymerge($dstImg, $srcImg, 30, 30, 0, 0, $srcW, $srcH, 70);

//保存图片
imagejpeg($dstImg,'./kuaixuewang_water.jpg');
imagedestroy($dstImg);
imagedestroy($srcImg);








 ?>