<?php 
class App{
	public function __call($func,$params){
		//获得未定义的方法名
//		echo $func;
		//获得未定义的方法的参数
		var_dump($params);
	}
}
$obj = new App;
$obj->index('a','b');

 ?>