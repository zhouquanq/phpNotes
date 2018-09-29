<?php 
header('Content-type:text/html;charset=utf-8');
$type = "png";
$fn = 'open_' . $type;
//变量函数,因为函数名是一个变量
$fn();

function open_gif(){
	echo '打开gif图';
}
function open_jpg(){
	echo '打开jpg图';
}

function open_png(){
	echo '打开png图';
}
function open_bmp(){
	echo '打开bmp图';
}


 ?>