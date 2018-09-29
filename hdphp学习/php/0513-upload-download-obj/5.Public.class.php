<?php 
class Father{
	public $hair;
	
	public function make_money(){
		echo 'make money';
	}
	
	public function test(){
		//1.public 类的内部可以访问
		$this->make_money();
	}
	
}
$fatherObj = new Father();
//$fatherObj->test();

//2.public 类的外部可以访问
//$fatherObj->make_money();

//子类继承父类 extends
class Son extends Father{
	public function son_test(){
		//3.public 子类可以调用父类
		$this->make_money();
	}
}

$sonObj = new Son();
$sonObj->son_test();













 ?>