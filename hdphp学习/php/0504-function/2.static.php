<?php 
//在一次脚本运行之间，同函数调用，静态变量可以共享
function a(){
	static $a = 0;
	$a++;
	echo $a;
}
a();
a();
a();
a();
a();
a();
a();
a();










 ?>