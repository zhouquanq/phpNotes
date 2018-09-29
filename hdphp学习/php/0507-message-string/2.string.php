<?php 
include "../functions.php";
//单引号(不会解析变量)
//$a = '.com';
//$str = 'houdu\'n\\\'wang$a';
//echo $str;

//双引号(可以解析变量)
//$a = '.com';
//$str = "{$a}houdunwang";
//echo $str;

//定界符
//$a = '.com';
//$str = <<<a
//	'"'‘houdunwang{$a}
//a;
//echo $str;

/*
$phpCode = <<<str
<?php
return array();
?>
str; 
file_put_contents('./data.php',$phpCode);
*/
 
//是否解析，看一下最外层的引号
//$str ='.com';
//echo 'abc"{$str}"';

//$str = 'abcedf';
//$str = '汉字';
//字符串长度
//计算汉字长度不准
//echo strlen($str);
//汉字和英文字母都可以计算长度
//echo mb_strlen($str,'utf8');

//获得类型
//$pic = '1.1.jpg';
////从左边找到第一个.以后的部分
////echo strchr($pic, '.');
////从右边找到第一个.以后的部分
//$type = strrchr($pic, '.');
////去除左边的点
//echo ltrim($type, '.');


//$str = '.1.';
////echo ltrim($str,'.');
////echo rtrim($str,'.');
//echo trim($str,'.');

//trim不传递参数，是去除空格
//$str = '    .1.    ';
//echo strlen($str) . '<br/>';
//$str = trim($str);
//echo strlen($str);


//$str = 'ABC';
////转成小写
//$str = strtolower($str);
////转为大写
//echo strtoupper($str);


//将首字母大写
//$str = 'i am a good boy';
//echo ucfirst($str);

//将每一个单词首字母大写
//$str = 'i am a good boy';
//echo ucwords($str);

//以后密码需要用md5加密
//$password = 'admin888';
//$password = md5($password);
//echo $password . '<br/>';
//永远都是32位
//echo strlen($password);

//将字符串变为数组
//$pizza = "piece1,piece2,piece3";
//$arr = explode(',', $pizza);
//p($arr);

//把数字变为数组
//$arr = array(
//	'1.jpg',
//	'2.jpg',
//	'3.jpg'
//);
//$str = implode('|', $arr);
//echo $str;

//$str = 'abcedfg';
//echo substr($str, 1);//bcedfg
//echo substr($str, -2);//fg
//echo substr($str, 1,2);//bc
//echo substr($str, 1,-1);//bcedf

//返回字符出现的位置
//$str = 'abcbd';
//从左边
////echo strpos($str, 'b');
//从右边
//echo strrpos($str, 'b');

//找到所有的,替换为空（去掉所有,）
//$str = ',a,b,c,d,';
//echo str_replace(',', '', $str);

//忽略大小写
//$str = 'abcedAc';
//echo str_ireplace('a', 0, $str);
//echo str_ireplace(array('a','e'), 0, $str);
//echo str_ireplace(array('a','e'), array(0,1), $str);


















 ?>