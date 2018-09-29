<?php 
include "../functions.php";
class Model{
	/**
	 * 构造方法,实例化会自动运行
	 */
	public function __construct(){
		echo '我已经运行了';
	}
	
	public function run(){
		echo 'run';
	}
	
	
}
$obj = new Model();
//$obj->run();





 ?>