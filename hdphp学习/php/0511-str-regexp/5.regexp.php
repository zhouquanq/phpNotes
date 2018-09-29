<?php 
include "../functions.php";
//定义正则
//$preg = "/houdunwang/";
//$str = 'www.houdunwang.com';
////匹配字符串
//var_dump(preg_match($preg, $str));

//\d代表匹配任意一个数字
//$preg = "/\d/";
//$str = '123';
//var_dump(preg_match($preg, $str));

//匹配任意一个数字
//$preg = "/[0-9]/";
//$str = '123';
//var_dump(preg_match($preg, $str));

//匹配特殊字符，需要转义
//转义之后，就是普通的点
//$preg = "/\./";
//$str = '1.1';
//var_dump(preg_match($preg, $str));

//除了a-d以外的字符，都算匹配成功
//$preg = "/[^a-d]/";
//$str = 'abcde';
//var_dump(preg_match($preg, $str));

//匹配到@或者#
//$str = '1.jpg@2.jpg#3.jpg';
//$preg = "/[@#]/";
////通过正则把字符串变为数组
//$arr = preg_split($preg, $str);
//p($arr);

//正则替换
$str = "后盾官网www.houdunwang.com后盾论坛 http://bbs.houdunwang.com我在后盾的网名叫houdun";
$preg = "/(houdun)wan(g)/";

//echo preg_replace($preg, '<span style="color:red">\1</span>wan<span style="color:green">\2</span>', $str);


//选择修饰符
//$str = "http://www.baidu.com新浪网http://www.sina.com";
//$preg = "/\.(baidu|sina)\./";
//echo preg_replace($preg, '.houdunwang.', $str);

//手机号正则
//$phoneNumber = '15510608116';
//$phoneNumber = '13410608116';
//$phoneNumber = '17710608116';
//$phoneNumber = '18610608116';
//$phoneNumber = '18610608116123';

//$preg = "/^(155|134|177|186)\d{8}$/";
//var_dump(preg_match($preg, $phoneNumber));

























 ?>