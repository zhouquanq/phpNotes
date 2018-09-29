<?php 
include "../functions.php";
class App{
	private $link=1;
	private $mysql=1;
	/**
	 * 在外部检测私有属性的时候，会自动触发
	 * 会把属性的名字传入
	 */
	public function __isset($name){
		return isset($this->$name);
	}
	/**
	 * 删除私有属性，自动触发
	 */
	public function __unset($name){
		unset($this->$name);
	}
	/**
	 * 获得未定义属性，自动触发
	 */
	public function __get($name){
		echo $name;
	}
	
	public function __set($name,$value){
		echo $value;
	}
	
}

$obj = new App;
//给未定义属性赋值
$obj->bigCake = '大蛋糕';


//获得未定义属性
//echo $obj->cake;


//删除私有属性
unset($obj->link);

//检测私有属性
$bool = isset($obj->link);
//$bool = isset($obj->mysql);
//var_dump($bool);

 ?>