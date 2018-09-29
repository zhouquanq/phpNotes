<?php 
include "../functions.php";
class Appfather{
	protected static function make_money(){
		echo 'make money';
	}
}
class App extends Appfather{
	public function index(){
		echo 'index';
	}
	/**
	 * 静态方法里面不用使用对象
	 */
	public static function run(){
		//调用父类的静态方法
		parent::make_money();
	}
	
}
//调用类的静态方法
App::run();

//$obj = new App();
//$obj->run();



//1.静态方法、属性 :: 调用 self::  parent::  App::
//2.普通方法用实例化对象调用










 ?>