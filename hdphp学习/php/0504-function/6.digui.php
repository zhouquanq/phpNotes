<?php 
//facto(3)   3 * facto(2)
//facto(2)   2 * facto(1)
//facto(1)   1

//递归：
//1.自己调用自己
//2.必须要有结束的条件，否则无限递归是没有意义
function facto($num){
	if($num > 1){
		$result = $num * facto($num - 1);
	}else{
		$result = 1;
	}
	return $result;
}
echo facto(5);





 ?>