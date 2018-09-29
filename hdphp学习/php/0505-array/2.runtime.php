<?php 
//不用函数的写法**************
//$start = microtime(true);
//for ($i=0; $i < 100000; $i++) { 
//	$a = 1;
//}
//$end = microtime(true);
//echo $end - $start;
//用函数的写法*******************
runtime('start');
for ($i=0; $i < 100000; $i++) { 
	$a = 1;
}
echo runtime('end');

function runtime($pos){
	static $start = 0;
	//代表脚本开始
	if($pos == 'start'){
		$start = microtime(true);
	//代表脚本结束	
	}else if($pos == 'end'){
		return microtime(true) - $start;
	}
}













 ?>