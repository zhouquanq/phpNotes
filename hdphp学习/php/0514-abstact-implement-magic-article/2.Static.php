<?php 
include "../functions.php";
class App{
	//静态调用不会运行构造方法，因为只有实例化的时候才会运行
//	public function __construct(){
//		echo 'run';
//	}
	public static function run(){
		//1.初始化
		self::init();
		//2.创建DEMO	
		self::createDemo();
	}
	private static function init(){
		echo '初始化了';
	}
	
	private static function createDemo(){
		echo '创建DEMO';
	}
	
}
//调用类的静态方法
App::run();











 ?>