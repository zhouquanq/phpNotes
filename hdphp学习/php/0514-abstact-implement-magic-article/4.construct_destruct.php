<?php 
include "../functions.php";
class Human{
	public function __construct(){
		echo '我来了<br/>';
	}
	
	public function live(){
		echo '我在生活<br/>';
	}
	/**
	 * 析构，在对象结束时，自动调用
	 */
	public function __destruct(){
		echo '我走了<br/>';
	}
	
	
}

$obj = new Human;
$obj->live();
$obj = new Human;












 ?>