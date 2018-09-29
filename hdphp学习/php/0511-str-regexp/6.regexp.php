<?php 
include "../functions.php";
////模式修饰符
//$str = 'abc';
////i 忽略大小写
//$preg = "/[ABC]/i";
//var_dump(preg_match($preg, $str));

//s 将多行视为单行
//$str = "<div>小红</div><div>小明</div><div>
//小龙</div><span>小鹏</span>";
//$preg = "/<div>(.*?)<\/div>/s";
//preg_match_all($preg, $str,$arr);
//p($arr);

//傻瓜化写法（忽略大小写，将多行视为单行）
//$preg = "/<div>(.*?)<\/div>/is";


//e 将字符串变成可以执行的代码(将被淘汰)
//$str = "password:admin888";
////$str = "password:123456";
//$preg = "/password:(\w+)/e";
//echo preg_replace($preg, '"password:" . md5("\1")', $str);


//未来将使用这样的模式代替模式修饰符e
$str = "password:admin888";
$str = "password:123456";
$preg = "/password:(\w+)/";
echo preg_replace_callback($preg, 'func', $str);
//只要这么写，系统就会自动调用，自动传参
function func($var){
	//参数是什么？打印便知
	return "password:" . md5($var[1]);
}



























?>










