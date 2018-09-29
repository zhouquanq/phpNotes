<?php 
include "../functions.php";
//function a(){
//	static $a = 0;
//	$a++;
//	echo $a;
//}
//a();
//a();
//a();
//a();
//a();
//a();

class Model{
	//声明静态属性
	private static $link = NULL;
	
	public function __construct(){
		//1.第一次静态属性$link为空
		//2.第二次，因为静态属性可以保存起来，不为空
		if(is_null(self::$link)){
			//self::$link 调用当前类静态属性
			self::$link = $this->connect();
		}
	}
	
	/**
	 * 链接数据库
	 */
	private function connect(){
		echo '链接数据库<br/>';
		return "mysql";
	}
	
	/**
	 * 查询
	 */
	public function query(){
		echo self::$link . "查询<br/>";
	}
}
//实例化多次只连接一次数据库
$model = new Model();
$model->query();

$model = new Model();
$model->query();

$model = new Model();
$model->query();















 ?>