<?php 
include "../functions.php";
//以下情况，在里面不可以改变外面的变量
/*$hd = 3;
function hd(){
	$hd = 4;
	echo "我是里面的变量：" . $hd . '<br/>';
}
hd();
echo "我是外面的变量：" . $hd;*/


//通过里面改变外面变量方法1：推荐指数：1颗星
/*$hd = 3;
function hd(){
//	global $hd;
	$hd = 4;
}
hd();
echo $hd;*/

/*$a = 3;
function hd(){
	$GLOBALS['a'] = 5;
}
hd();
echo $a;*/

/*//通过里面改变外面变量方法2：推荐指数：3颗星
$hd = 3;
function hd(&$var){
	//所以现在改变里面，也在改变外面，因为是同一块地址
	$var = 4;
}
//相当于把$hd地址传入到函数之中
hd($hd);
echo $hd;*/

//通过里面改变外面变量方法2：推荐指数：5颗星
/*$a = 5;
function hd($var){
	return $var + 1;
}
$a = hd($a);
echo $a;*/
















 ?>