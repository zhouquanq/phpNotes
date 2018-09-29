<?php 
include "../functions.php";
//创建递归函数完成多维数组key的大小写转换,弥补 array_change_key_case函数功能的不足。
$arr = array(
	'a'=>'A',
	'b'=>'B',
	'e'=>array(
		'f'=>'E',
		'g'=>'G',
		'z'=>'Z'
	)
);
//第一步
//array(
//	'A'=>'A',
//	'B'=>'B',
//	'E'=>array(
//		'f'=>'E',
//		'g'=>'G',
//		'z'=>'Z'
//	)
//);
//第二步
//array(
//		'F'=>'E',
//		'G'=>'G',
//		'Z'=>'Z'
//	)
//第三步
//$arr['E'] = array(
//		'F'=>'E',
//		'G'=>'G',
//		'Z'=>'Z'
//	)

//最终结果
//array(
//	'A'=>'A',
//	'B'=>'B',
//	'E'=>array(
//		'F'=>'E',
//		'G'=>'G',
//		'Z'=>'Z'
//	)
//);

$newArr = change_key($arr);
p($newArr);
function change_key($arr,$case=CASE_UPPER){
	//转换第一层大小写
	$arr = array_change_key_case($arr,$case);
	//遍历数组
	foreach ($arr as $k => $v) {
		//如果$v是数组，则递归
		if(is_array($v)){
			//递归改变完成之后，再把之前的小写的键名覆盖
			$arr[$k] = change_key($v,$case);
		}
	}
	//返回数组
	return $arr;
}

















 ?>